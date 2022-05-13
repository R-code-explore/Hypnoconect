<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WappoVendor\Symfony\Component\HttpKernel\DependencyInjection;

use WappoVendor\Psr\Log\LoggerInterface;
use WappoVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use WappoVendor\Symfony\Component\DependencyInjection\ContainerBuilder;
use WappoVendor\Symfony\Component\HttpKernel\Log\Logger;
/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements \WappoVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(\WappoVendor\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        $container->setAlias(\WappoVendor\Psr\Log\LoggerInterface::class, 'logger')->setPublic(false);
        if ($container->has('logger')) {
            return;
        }
        $container->register('logger', \WappoVendor\Symfony\Component\HttpKernel\Log\Logger::class)->setPublic(false);
    }
}
