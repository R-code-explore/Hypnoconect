<?php

namespace WappoVendor\Illuminate\Database\Schema\Grammars;

use WappoVendor\Illuminate\Support\Fluent;
use WappoVendor\Doctrine\DBAL\Schema\TableDiff;
use WappoVendor\Illuminate\Database\Connection;
use WappoVendor\Illuminate\Database\Query\Expression;
use WappoVendor\Illuminate\Database\Schema\Blueprint;
use WappoVendor\Illuminate\Database\Grammar as BaseGrammar;
use WappoVendor\Doctrine\DBAL\Schema\AbstractSchemaManager as SchemaManager;
abstract class Grammar extends \WappoVendor\Illuminate\Database\Grammar
{
    /**
     * If this Grammar supports schema changes wrapped in a transaction.
     *
     * @var bool
     */
    protected $transactions = false;
    /**
     * Compile a rename column command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  \Illuminate\Database\Connection  $connection
     * @return array
     */
    public function compileRenameColumn(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command, \WappoVendor\Illuminate\Database\Connection $connection)
    {
        return \WappoVendor\Illuminate\Database\Schema\Grammars\RenameColumn::compile($this, $blueprint, $command, $connection);
    }
    /**
     * Compile a change column command into a series of SQL statements.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @param  \Illuminate\Database\Connection $connection
     * @return array
     *
     * @throws \RuntimeException
     */
    public function compileChange(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command, \WappoVendor\Illuminate\Database\Connection $connection)
    {
        return \WappoVendor\Illuminate\Database\Schema\Grammars\ChangeColumn::compile($this, $blueprint, $command, $connection);
    }
    /**
     * Compile a foreign key command.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $command
     * @return string
     */
    public function compileForeign(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $command)
    {
        // We need to prepare several of the elements of the foreign key definition
        // before we can create the SQL, such as wrapping the tables and convert
        // an array of columns to comma-delimited strings for the SQL queries.
        $sql = \sprintf('alter table %s add constraint %s ', $this->wrapTable($blueprint), $this->wrap($command->index));
        // Once we have the initial portion of the SQL statement we will add on the
        // key name, table name, and referenced columns. These will complete the
        // main portion of the SQL statement and this SQL will almost be done.
        $sql .= \sprintf('foreign key (%s) references %s (%s)', $this->columnize($command->columns), $this->wrapTable($command->on), $this->columnize((array) $command->references));
        // Once we have the basic foreign key creation statement constructed we can
        // build out the syntax for what should happen on an update or delete of
        // the affected columns, which will get something like "cascade", etc.
        if (!\is_null($command->onDelete)) {
            $sql .= " on delete {$command->onDelete}";
        }
        if (!\is_null($command->onUpdate)) {
            $sql .= " on update {$command->onUpdate}";
        }
        return $sql;
    }
    /**
     * Compile the blueprint's column definitions.
     *
     * @param  \Illuminate\Database\Schema\Blueprint $blueprint
     * @return array
     */
    protected function getColumns(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint)
    {
        $columns = [];
        foreach ($blueprint->getAddedColumns() as $column) {
            // Each of the column types have their own compiler functions which are tasked
            // with turning the column definition into its SQL format for this platform
            // used by the connection. The column's modifiers are compiled and added.
            $sql = $this->wrap($column) . ' ' . $this->getType($column);
            $columns[] = $this->addModifiers($sql, $blueprint, $column);
        }
        return $columns;
    }
    /**
     * Get the SQL for the column data type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function getType(\WappoVendor\Illuminate\Support\Fluent $column)
    {
        return $this->{'type' . \ucfirst($column->type)}($column);
    }
    /**
     * Add the column modifiers to the definition.
     *
     * @param  string  $sql
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function addModifiers($sql, \WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Illuminate\Support\Fluent $column)
    {
        foreach ($this->modifiers as $modifier) {
            if (\method_exists($this, $method = "modify{$modifier}")) {
                $sql .= $this->{$method}($blueprint, $column);
            }
        }
        return $sql;
    }
    /**
     * Get the primary key command if it exists on the blueprint.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  string  $name
     * @return \Illuminate\Support\Fluent|null
     */
    protected function getCommandByName(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, $name)
    {
        $commands = $this->getCommandsByName($blueprint, $name);
        if (\count($commands) > 0) {
            return \reset($commands);
        }
    }
    /**
     * Get all of the commands with a given name.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  string  $name
     * @return array
     */
    protected function getCommandsByName(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, $name)
    {
        return \array_filter($blueprint->getCommands(), function ($value) use($name) {
            return $value->name == $name;
        });
    }
    /**
     * Add a prefix to an array of values.
     *
     * @param  string  $prefix
     * @param  array   $values
     * @return array
     */
    public function prefixArray($prefix, array $values)
    {
        return \array_map(function ($value) use($prefix) {
            return $prefix . ' ' . $value;
        }, $values);
    }
    /**
     * Wrap a table in keyword identifiers.
     *
     * @param  mixed   $table
     * @return string
     */
    public function wrapTable($table)
    {
        return parent::wrapTable($table instanceof \WappoVendor\Illuminate\Database\Schema\Blueprint ? $table->getTable() : $table);
    }
    /**
     * Wrap a value in keyword identifiers.
     *
     * @param  \Illuminate\Database\Query\Expression|string  $value
     * @param  bool    $prefixAlias
     * @return string
     */
    public function wrap($value, $prefixAlias = false)
    {
        return parent::wrap($value instanceof \WappoVendor\Illuminate\Support\Fluent ? $value->name : $value, $prefixAlias);
    }
    /**
     * Format a value so that it can be used in "default" clauses.
     *
     * @param  mixed   $value
     * @return string
     */
    protected function getDefaultValue($value)
    {
        if ($value instanceof \WappoVendor\Illuminate\Database\Query\Expression) {
            return $value;
        }
        return \is_bool($value) ? "'" . (int) $value . "'" : "'" . (string) $value . "'";
    }
    /**
     * Create an empty Doctrine DBAL TableDiff from the Blueprint.
     *
     * @param  \Illuminate\Database\Schema\Blueprint  $blueprint
     * @param  \Doctrine\DBAL\Schema\AbstractSchemaManager  $schema
     * @return \Doctrine\DBAL\Schema\TableDiff
     */
    public function getDoctrineTableDiff(\WappoVendor\Illuminate\Database\Schema\Blueprint $blueprint, \WappoVendor\Doctrine\DBAL\Schema\AbstractSchemaManager $schema)
    {
        $table = $this->getTablePrefix() . $blueprint->getTable();
        return \WappointmentLv::tap(new \WappoVendor\Doctrine\DBAL\Schema\TableDiff($table), function ($tableDiff) use($schema, $table) {
            $tableDiff->fromTable = $schema->listTableDetails($table);
        });
    }
    /**
     * Check if this Grammar supports schema changes wrapped in a transaction.
     *
     * @return bool
     */
    public function supportsSchemaTransactions()
    {
        return $this->transactions;
    }
}
