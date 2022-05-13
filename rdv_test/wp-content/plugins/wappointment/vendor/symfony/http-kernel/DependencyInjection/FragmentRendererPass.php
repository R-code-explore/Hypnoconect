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

use WappoVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use WappoVendor\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass;
use WappoVendor\Symfony\Component\DependencyInjection\ContainerBuilder;
use WappoVendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use WappoVendor\Symfony\Component\DependencyInjection\Reference;
use WappoVendor\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface;
/**
 * Adds services tagged kernel.fragment_renderer as HTTP content rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FragmentRendererPass implements \WappoVendor\Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface
{
    private $handlerService;
    private $rendererTag;
    /**
     * @param string $handlerService Service name of the fragment handler in the container
     * @param string $rendererTag    Tag name used for fragments
     */
    public function __construct($handlerService = 'fragment.handler', $rendererTag = 'kernel.fragment_renderer')
    {
        $this->handlerService = $handlerService;
        $this->rendererTag = $rendererTag;
    }
    public function process(\WappoVendor\Symfony\Component\DependencyInjection\ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->handlerService)) {
            return;
        }
        $definition = $container->getDefinition($this->handlerService);
        $renderers = [];
        foreach ($container->findTaggedServiceIds($this->rendererTag, true) as $id => $tags) {
            $def = $container->getDefinition($id);
            $class = $container->getParameterBag()->resolveValue($def->getClass());
            if (!($r = $container->getReflectionClass($class))) {
                throw new \WappoVendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Class "%s" used for service "%s" cannot be found.', $class, $id));
            }
            if (!$r->isSubclassOf(\WappoVendor\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class)) {
                throw new \WappoVendor\Symfony\Component\DependencyInjection\Exception\InvalidArgumentException(\sprintf('Service "%s" must implement interface "%s".', $id, \WappoVendor\Symfony\Component\HttpKernel\Fragment\FragmentRendererInterface::class));
            }
            foreach ($tags as $tag) {
                $renderers[$tag['alias']] = new \WappoVendor\Symfony\Component\DependencyInjection\Reference($id);
            }
        }
        $definition->replaceArgument(0, \WappoVendor\Symfony\Component\DependencyInjection\Compiler\ServiceLocatorTagPass::register($container, $renderers));
    }
}
