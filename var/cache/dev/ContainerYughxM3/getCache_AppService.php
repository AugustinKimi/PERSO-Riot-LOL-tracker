<?php

<<<<<<< HEAD:var/cache/dev/ContainerGj18x04/getCache_AppService.php
namespace ContainerGj18x04;

=======
namespace ContainerYughxM3;
>>>>>>> 17b41e6ae488ec062dd44ef8d6ce4ddaa6c456e0:var/cache/dev/ContainerYughxM3/getCache_AppService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AppService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemCommonTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Traits/FilesystemTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Adapter/FilesystemAdapter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/MarshallerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/cache/Marshaller/DefaultMarshaller.php';

        $container->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('yBh6vsqr-P', 0, ($container->targetDir.''.'/pools'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL));

        $instance->setLogger(($container->privates['logger'] ?? ($container->privates['logger'] = new \Symfony\Component\HttpKernel\Log\Logger())));

        return $instance;
    }
}
