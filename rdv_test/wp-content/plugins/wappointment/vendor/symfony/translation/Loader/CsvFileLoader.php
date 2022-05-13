<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WappoVendor\Symfony\Component\Translation\Loader;

use WappoVendor\Symfony\Component\Translation\Exception\NotFoundResourceException;
/**
 * CsvFileLoader loads translations from CSV files.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class CsvFileLoader extends \WappoVendor\Symfony\Component\Translation\Loader\FileLoader
{
    private $delimiter = ';';
    private $enclosure = '"';
    private $escape = '\\';
    /**
     * {@inheritdoc}
     */
    protected function loadResource($resource)
    {
        $messages = [];
        try {
            $file = new \SplFileObject($resource, 'rb');
        } catch (\RuntimeException $e) {
            throw new \WappoVendor\Symfony\Component\Translation\Exception\NotFoundResourceException(\sprintf('Error opening file "%s".', $resource), 0, $e);
        }
        $file->setFlags(\SplFileObject::READ_CSV | \SplFileObject::SKIP_EMPTY);
        $file->setCsvControl($this->delimiter, $this->enclosure, $this->escape);
        foreach ($file as $data) {
            if (false === $data) {
                continue;
            }
            if ('#' !== \substr($data[0], 0, 1) && isset($data[1]) && 2 === \count($data)) {
                $messages[$data[0]] = $data[1];
            }
        }
        return $messages;
    }
    /**
     * Sets the delimiter, enclosure, and escape character for CSV.
     *
     * @param string $delimiter Delimiter character
     * @param string $enclosure Enclosure character
     * @param string $escape    Escape character
     */
    public function setCsvControl($delimiter = ';', $enclosure = '"', $escape = '\\')
    {
        $this->delimiter = $delimiter;
        $this->enclosure = $enclosure;
        $this->escape = $escape;
    }
}