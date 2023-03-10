<?php

namespace ContainerKv53vR7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocieteVersionServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\SocieteVersionService' shared autowired service.
     *
     * @return \App\Service\SocieteVersionService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/SocieteVersionService.php';

        $container->services['App\\Service\\SocieteVersionService'] = $instance = new \App\Service\SocieteVersionService(($container->privates['App\\Repository\\SocieteRepository'] ?? $container->load('getSocieteRepositoryService')), ($container->privates['App\\Repository\\SocieteVersionRepository'] ?? $container->load('getSocieteVersionRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Service\\SocieteVersionService', $container));

        return $instance;
    }
}
