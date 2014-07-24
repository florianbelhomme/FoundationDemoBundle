<?php

namespace FlorianBelhomme\Bundle\FoundationDemoBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class FlorianBelhommeFoundationDemoExtension extends Extension
{
    
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');

        // Add this bundle to assetic
        $asseticBundles = $container->getParameter('assetic.bundles');
        $asseticBundles[] = 'FlorianBelhommeFoundationDemoBundle';
        $container->setParameter('assetic.bundles', $asseticBundles);
    }
}
