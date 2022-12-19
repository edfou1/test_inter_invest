<?php

namespace ContainerKv53vR7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AynGIcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ayn_gIc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ayn_gIc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'adresseService' => ['services', 'App\\Service\\AdresseService', 'getAdresseServiceService', true],
        ], [
            'adresseService' => 'App\\Service\\AdresseService',
        ]);
    }
}
