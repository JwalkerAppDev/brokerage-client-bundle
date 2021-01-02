<?php

/*
 * Brokerage Bundle
 */

declare(strict_types=1);

namespace StocksApiBundles\BrokerageClient\DependencyInjection;

use StocksApiBundles\BrokerageClient\Constants\Configuration as Config;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class StocksApiBrokerageExtension.
 */
class StocksApiBrokerageExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $processConfiguration = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/Resources/config')
        );

        $container->setParameter(
            'stocks_api_brokerage_client.brokerages',
            $processConfiguration[Config::BROKERAGES]
        );

        $loader->load('services.yml');
    }
}
