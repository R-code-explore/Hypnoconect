<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WappoVendor\Symfony\Component\Translation\Catalogue;

use WappoVendor\Symfony\Component\Translation\Exception\InvalidArgumentException;
use WappoVendor\Symfony\Component\Translation\Exception\LogicException;
use WappoVendor\Symfony\Component\Translation\MessageCatalogue;
use WappoVendor\Symfony\Component\Translation\MessageCatalogueInterface;
/**
 * Base catalogues binary operation class.
 *
 * A catalogue binary operation performs operation on
 * source (the left argument) and target (the right argument) catalogues.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
abstract class AbstractOperation implements \WappoVendor\Symfony\Component\Translation\Catalogue\OperationInterface
{
    protected $source;
    protected $target;
    protected $result;
    /**
     * @var array|null The domains affected by this operation
     */
    private $domains;
    /**
     * This array stores 'all', 'new' and 'obsolete' messages for all valid domains.
     *
     * The data structure of this array is as follows:
     *
     *     [
     *         'domain 1' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         'domain 2' => [
     *             'all' => [...],
     *             'new' => [...],
     *             'obsolete' => [...]
     *         ],
     *         ...
     *     ]
     *
     * @var array The array that stores 'all', 'new' and 'obsolete' messages
     */
    protected $messages;
    /**
     * @throws LogicException
     */
    public function __construct(\WappoVendor\Symfony\Component\Translation\MessageCatalogueInterface $source, \WappoVendor\Symfony\Component\Translation\MessageCatalogueInterface $target)
    {
        if ($source->getLocale() !== $target->getLocale()) {
            throw new \WappoVendor\Symfony\Component\Translation\Exception\LogicException('Operated catalogues must belong to the same locale.');
        }
        $this->source = $source;
        $this->target = $target;
        $this->result = new \WappoVendor\Symfony\Component\Translation\MessageCatalogue($source->getLocale());
        $this->messages = [];
    }
    /**
     * {@inheritdoc}
     */
    public function getDomains()
    {
        if (null === $this->domains) {
            $this->domains = \array_values(\array_unique(\array_merge($this->source->getDomains(), $this->target->getDomains())));
        }
        return $this->domains;
    }
    /**
     * {@inheritdoc}
     */
    public function getMessages($domain)
    {
        if (!\in_array($domain, $this->getDomains())) {
            throw new \WappoVendor\Symfony\Component\Translation\Exception\InvalidArgumentException(\sprintf('Invalid domain: "%s".', $domain));
        }
        if (!isset($this->messages[$domain]['all'])) {
            $this->processDomain($domain);
        }
        return $this->messages[$domain]['all'];
    }
    /**
     * {@inheritdoc}
     */
    public function getNewMessages($domain)
    {
        if (!\in_array($domain, $this->getDomains())) {
            throw new \WappoVendor\Symfony\Component\Translation\Exception\InvalidArgumentException(\sprintf('Invalid domain: "%s".', $domain));
        }
        if (!isset($this->messages[$domain]['new'])) {
            $this->processDomain($domain);
        }
        return $this->messages[$domain]['new'];
    }
    /**
     * {@inheritdoc}
     */
    public function getObsoleteMessages($domain)
    {
        if (!\in_array($domain, $this->getDomains())) {
            throw new \WappoVendor\Symfony\Component\Translation\Exception\InvalidArgumentException(\sprintf('Invalid domain: "%s".', $domain));
        }
        if (!isset($this->messages[$domain]['obsolete'])) {
            $this->processDomain($domain);
        }
        return $this->messages[$domain]['obsolete'];
    }
    /**
     * {@inheritdoc}
     */
    public function getResult()
    {
        foreach ($this->getDomains() as $domain) {
            if (!isset($this->messages[$domain])) {
                $this->processDomain($domain);
            }
        }
        return $this->result;
    }
    /**
     * Performs operation on source and target catalogues for the given domain and
     * stores the results.
     *
     * @param string $domain The domain which the operation will be performed for
     */
    protected abstract function processDomain($domain);
}
