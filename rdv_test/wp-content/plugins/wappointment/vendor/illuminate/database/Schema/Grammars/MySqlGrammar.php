<?php

namespace WappoVendor\Illuminate\Database\Schema\Grammars;

use WappoVendor\Illuminate\Support\Fluent;
use WappoVendor\Illuminate\Database\Connection;
use WappoVendor\Illuminate\Database\Schema\Blueprint;
class MySqlGrammar extends \WappoVendor\Illuminate\Database\Schema\Grammars\Grammar
{
    /**
     * The possible column modifiers.
     *
     * @var array
     */
    protected $modifiers = ['Unsigned', 'VirtualAs', 'StoredAs', 'Charset', 'Collate', 'Nullable', 'Default', 'Increment', 'Comment', 'After', 'First'];
    /**
     * The possible column serials.
     *
     * @var array
     */
    protected $serials = ['bigInteger', 'integer', 'mediumInteger', 'smallInteger', 'tinyInteger'];
    /**
     * Compile the query to determine the list of tables.
     *
     * @return string
     */
    public function compileTableExists()
    {
        return 'select * from information_schema.tables where table_schema = ? and table_name = ?';
    }
    /**
     * Compile the query to determine the list of columns.
     *
     * @return string
     */
    public function compileColumnListing()
    {
        return 'select column_name as `column_name` from information_schema.columns where table_schema = ? and table_name = ?';
    }
    /**
     * Compile a create table command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  \Illuminate\Database\Connection  $connection
     * @return string
     */
    public function compileCreate(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command, \WappoVendor\Illuminate\Database\Connection $connection)
    {
        $sql = $this->compileCreateTable($blueprint, $command, $connection);
        // Once we have the primary SQL, we can add the encoding option to the SQL for
        // the table.  Then, we can check if a storage engine has been supplied for
        // the table. If so, we will add the engine declaration to the SQL query.
        $sql = $this->compileCreateEncoding($sql, $connection, $blueprint);
        // Finally, we will append the engine configuration onto this SQL statement as
        // the final thing we do before returning this finished SQL. Once this gets
        // added the query will be ready to execute against the real connections.
        return $this->compileCreateEngine($sql, $connection, $blueprint);
    }
    /**
     * Create the main create table clause.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  \Illuminate\Database\Connection  $connection
     * @return string
     */
    protected function compileCreateTable($blueprint, $command, $connection)
    {
        return \sprintf('%s table %s (%s)', $blueprint->temporary ? 'create temporary' : 'create', $this->wrapTable($blueprint), \implode(', ', $this->getColumns($blueprint)));
    }
    /**
     * Append the character set specifications to a command.
     *
     * @param  string  $sql
     * @param  \Illuminate\Database\Connection  $connection
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @return string
     */
    protected function compileCreateEncoding($sql, \WappoVendor\Illuminate\Database\Connection $connection, \WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint)
    {
        // First we will set the character set if one has been set on either the create
        // blueprint itself or on the root configuration for the connection that the
        // table is being created on. We will add these to the create table query.
        if (isset($blueprint->charset)) {
            $sql .= ' default character set ' . $blueprint->charset;
        } elseif (!\is_null($charset = $connection->getConfig('charset'))) {
            $sql .= ' default character set ' . $charset;
        }
        // Next we will add the collation to the create table statement if one has been
        // added to either this create table blueprint or the configuration for this
        // connection that the query is targeting. We'll add it to this SQL query.
        if (isset($blueprint->collation)) {
            $sql .= ' collate ' . $blueprint->collation;
        } elseif (!\is_null($collation = $connection->getConfig('collation'))) {
            $sql .= ' collate ' . $collation;
        }
        return $sql;
    }
    /**
     * Append the engine specifications to a command.
     *
     * @param  string  $sql
     * @param  \Illuminate\Database\Connection  $connection
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @return string
     */
    protected function compileCreateEngine($sql, \WappoVendor\Illuminate\Database\Connection $connection, \WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint)
    {
        if (isset($blueprint->engine)) {
            return $sql . ' engine = ' . $blueprint->engine;
        } elseif (!\is_null($engine = $connection->getConfig('engine'))) {
            return $sql . ' engine = ' . $engine;
        }
        return $sql;
    }
    /**
     * Compile an add column command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileAdd(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $columns = $this->prefixArray('add', $this->getColumns($blueprint));
        return 'alter table ' . $this->wrapTable($blueprint) . ' ' . \implode(', ', $columns);
    }
    /**
     * Compile a primary key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compilePrimary(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $command->name(null);
        return $this->compileKey($blueprint, $command, 'primary key');
    }
    /**
     * Compile a unique key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileUnique(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return $this->compileKey($blueprint, $command, 'unique');
    }
    /**
     * Compile a plain index key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileIndex(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return $this->compileKey($blueprint, $command, 'index');
    }
    /**
     * Compile a spatial index key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileSpatialIndex(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return $this->compileKey($blueprint, $command, 'spatial index');
    }
    /**
     * Compile an index creation command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  string  $type
     * @return string
     */
    protected function compileKey(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command, $type)
    {
        return \sprintf('alter table %s add %s %s%s(%s)', $this->wrapTable($blueprint), $type, $this->wrap($command->index), $command->algorithm ? ' using ' . $command->algorithm : '', $this->columnize($command->columns));
    }
    /**
     * Compile a drop table command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDrop(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return 'drop table ' . $this->wrapTable($blueprint);
    }
    /**
     * Compile a drop table (if exists) command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropIfExists(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return 'drop table if exists ' . $this->wrapTable($blueprint);
    }
    /**
     * Compile a drop column command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropColumn(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $columns = $this->prefixArray('drop', $this->wrapArray($command->columns));
        return 'alter table ' . $this->wrapTable($blueprint) . ' ' . \implode(', ', $columns);
    }
    /**
     * Compile a drop primary key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropPrimary(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return 'alter table ' . $this->wrapTable($blueprint) . ' drop primary key';
    }
    /**
     * Compile a drop unique key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropUnique(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $index = $this->wrap($command->index);
        return "alter table {$this->wrapTable($blueprint)} drop index {$index}";
    }
    /**
     * Compile a drop index command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropIndex(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $index = $this->wrap($command->index);
        return "alter table {$this->wrapTable($blueprint)} drop index {$index}";
    }
    /**
     * Compile a drop spatial index command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropSpatialIndex(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        return $this->compileDropIndex($blueprint, $command);
    }
    /**
     * Compile a drop foreign key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileDropForeign(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $index = $this->wrap($command->index);
        return "alter table {$this->wrapTable($blueprint)} drop foreign key {$index}";
    }
    /**
     * Compile a rename table command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileRename(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        $from = $this->wrapTable($blueprint);
        return "rename table {$from} to " . $this->wrapTable($command->to);
    }
    /**
     * Compile the SQL needed to drop all tables.
     *
     * @param  array  $tables
     * @return string
     */
    public function compileDropAllTables($tables)
    {
        return 'drop table ' . \implode(',', $this->wrapArray($tables));
    }
    /**
     * Compile the SQL needed to retrieve all table names.
     *
     * @return string
     */
    public function compileGetAllTables()
    {
        return 'SHOW FULL TABLES WHERE table_type = \'BASE TABLE\'';
    }
    /**
     * Compile the command to enable foreign key constraints.
     *
     * @return string
     */
    public function compileEnableForeignKeyConstraints()
    {
        return 'SET FOREIGN_KEY_CHECKS=1;';
    }
    /**
     * Compile the command to disable foreign key constraints.
     *
     * @return string
     */
    public function compileDisableForeignKeyConstraints()
    {
        return 'SET FOREIGN_KEY_CHECKS=0;';
    }
    /**
     * Create the column definition for a char type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeChar(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return "char({$column->length})";
    }
    /**
     * Create the column definition for a string type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeString(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return "varchar({$column->length})";
    }
    /**
     * Create the column definition for a text type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeText(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'text';
    }
    /**
     * Create the column definition for a medium text type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeMediumText(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'mediumtext';
    }
    /**
     * Create the column definition for a long text type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeLongText(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'longtext';
    }
    /**
     * Create the column definition for a big integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBigInteger(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'bigint';
    }
    /**
     * Create the column definition for an integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeInteger(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'int';
    }
    /**
     * Create the column definition for a medium integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeMediumInteger(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'mediumint';
    }
    /**
     * Create the column definition for a tiny integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTinyInteger(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'tinyint';
    }
    /**
     * Create the column definition for a small integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeSmallInteger(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'smallint';
    }
    /**
     * Create the column definition for a float type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeFloat(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $this->typeDouble($column);
    }
    /**
     * Create the column definition for a double type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDouble(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        if ($column->total && $column->places) {
            return "double({$column->total}, {$column->places})";
        }
        return 'double';
    }
    /**
     * Create the column definition for a decimal type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDecimal(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return "decimal({$column->total}, {$column->places})";
    }
    /**
     * Create the column definition for a boolean type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBoolean(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'tinyint(1)';
    }
    /**
     * Create the column definition for an enum type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeEnum(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return "enum('" . \implode("', '", $column->allowed) . "')";
    }
    /**
     * Create the column definition for a json type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeJson(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'json';
    }
    /**
     * Create the column definition for a jsonb type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeJsonb(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'json';
    }
    /**
     * Create the column definition for a date type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDate(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'date';
    }
    /**
     * Create the column definition for a date-time type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDateTime(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $column->precision ? "datetime({$column->precision})" : 'datetime';
    }
    /**
     * Create the column definition for a date-time (with time zone) type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeDateTimeTz(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $this->typeDateTime($column);
    }
    /**
     * Create the column definition for a time type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTime(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $column->precision ? "time({$column->precision})" : 'time';
    }
    /**
     * Create the column definition for a time (with time zone) type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTimeTz(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $this->typeTime($column);
    }
    /**
     * Create the column definition for a timestamp type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTimestamp(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        $columnType = $column->precision ? "timestamp({$column->precision})" : 'timestamp';
        return $column->useCurrent ? "{$columnType} default CURRENT_TIMESTAMP" : $columnType;
    }
    /**
     * Create the column definition for a timestamp (with time zone) type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeTimestampTz(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $this->typeTimestamp($column);
    }
    /**
     * Create the column definition for a year type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeYear(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'year';
    }
    /**
     * Create the column definition for a binary type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeBinary(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'blob';
    }
    /**
     * Create the column definition for a uuid type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeUuid(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'char(36)';
    }
    /**
     * Create the column definition for an IP address type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeIpAddress(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'varchar(45)';
    }
    /**
     * Create the column definition for a MAC address type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeMacAddress(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'varchar(17)';
    }
    /**
     * Create the column definition for a spatial Geometry type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeGeometry(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'geometry';
    }
    /**
     * Create the column definition for a spatial Point type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typePoint(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'point';
    }
    /**
     * Create the column definition for a spatial LineString type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeLineString(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'linestring';
    }
    /**
     * Create the column definition for a spatial Polygon type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typePolygon(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'polygon';
    }
    /**
     * Create the column definition for a spatial GeometryCollection type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeGeometryCollection(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'geometrycollection';
    }
    /**
     * Create the column definition for a spatial MultiPoint type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiPoint(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'multipoint';
    }
    /**
     * Create the column definition for a spatial MultiLineString type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiLineString(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'multilinestring';
    }
    /**
     * Create the column definition for a spatial MultiPolygon type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    public function typeMultiPolygon(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return 'multipolygon';
    }
    /**
     * Get the SQL for a generated virtual column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyVirtualAs(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->virtualAs)) {
            return " as ({$column->virtualAs})";
        }
    }
    /**
     * Get the SQL for a generated stored column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyStoredAs(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->storedAs)) {
            return " as ({$column->storedAs}) stored";
        }
    }
    /**
     * Get the SQL for an unsigned column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyUnsigned(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if ($column->unsigned) {
            return ' unsigned';
        }
    }
    /**
     * Get the SQL for a character set column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyCharset(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->charset)) {
            return ' character set ' . $column->charset;
        }
    }
    /**
     * Get the SQL for a collation column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyCollate(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->collation)) {
            return ' collate ' . $column->collation;
        }
    }
    /**
     * Get the SQL for a nullable column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyNullable(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (\is_null($column->virtualAs) && \is_null($column->storedAs)) {
            return $column->nullable ? ' null' : ' not null';
        }
    }
    /**
     * Get the SQL for a default column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyDefault(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->default)) {
            return ' default ' . $this->getDefaultValue($column->default);
        }
    }
    /**
     * Get the SQL for an auto-increment column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyIncrement(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (\in_array($column->type, $this->serials) && $column->autoIncrement) {
            return ' auto_increment primary key';
        }
    }
    /**
     * Get the SQL for a "first" column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyFirst(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->first)) {
            return ' first';
        }
    }
    /**
     * Get the SQL for an "after" column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyAfter(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->after)) {
            return ' after ' . $this->wrap($column->after);
        }
    }
    /**
     * Get the SQL for a "comment" column modifier.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string|null
     */
    protected function modifyComment(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        if (!\is_null($column->comment)) {
            return " comment '" . \addslashes($column->comment) . "'";
        }
    }
    /**
     * Wrap a single string in keyword identifiers.
     *
     * @param  string  $value
     * @return string
     */
    protected function wrapValue($value)
    {
        if ($value !== '*') {
            return '`' . \str_replace('`', '``', $value) . '`';
        }
        return $value;
    }
}