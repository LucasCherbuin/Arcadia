<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader): void
    {
        // Chargement des fichiers de configuration
        $confDir = $this->getProjectDir() . '/config';

        $loader->load($confDir . '/{packages}/*.yaml', 'glob');
        $loader->load($confDir . '/{packages}/' . $this->environment . '/*.yaml', 'glob');
        $loader->load($confDir . '/{services}.yaml', 'glob');
        $loader->load($confDir . '/{services}_' . $this->environment . '.yaml', 'glob');
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        // Importation des fichiers de routes
        $routes->import('../config/{routes}/*.{php,yaml}');
        $routes->import('../config/{routes}/' . $this->environment . '/*.{php,yaml}');
        $routes->import('../config/{routes}.{php,yaml}');
    }
}
