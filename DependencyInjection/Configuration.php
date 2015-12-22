<?php

namespace EmilioMg\FrontpageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('emilio_mg_frontpage');

        $rootNode
            ->children()
            ->scalarNode('text')
                ->info('The text on the screen. Text in #hashtags# will have a different color.')
                ->defaultValue('my.#front#page')
                ->cannotBeEmpty()
            ->end()
            ->scalarNode('title')
                ->info('A separate page-title. If omitted, the text-attribute will be used.')
                ->defaultFalse()
            ->end()
        ;


        return $treeBuilder;
    }
}
