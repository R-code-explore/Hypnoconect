<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WappoVendor\Symfony\Component\Translation\Dumper;

use WappoVendor\Symfony\Component\Translation\MessageCatalogue;
/**
 * QtFileDumper generates ts files from a message catalogue.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class QtFileDumper extends \WappoVendor\Symfony\Component\Translation\Dumper\FileDumper
{
    /**
     * {@inheritdoc}
     */
    public function formatCatalogue(\WappoVendor\Symfony\Component\Translation\MessageCatalogue $messages, $domain, array $options = [])
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $dom->formatOutput = true;
        $ts = $dom->appendChild($dom->createElement('TS'));
        $context = $ts->appendChild($dom->createElement('context'));
        $context->appendChild($dom->createElement('name', $domain));
        foreach ($messages->all($domain) as $source => $target) {
            $message = $context->appendChild($dom->createElement('message'));
            $message->appendChild($dom->createElement('source', $source));
            $message->appendChild($dom->createElement('translation', $target));
        }
        return $dom->saveXML();
    }
    /**
     * {@inheritdoc}
     */
    protected function getExtension()
    {
        return 'ts';
    }
}