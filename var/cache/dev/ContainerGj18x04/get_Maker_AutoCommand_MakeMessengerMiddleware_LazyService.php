<?php

<<<<<<< HEAD:var/cache/dev/ContainerGj18x04/get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService.php
namespace ContainerGj18x04;

=======
namespace ContainerYughxM3;
>>>>>>> 17b41e6ae488ec062dd44ef8d6ce4ddaa6c456e0:var/cache/dev/ContainerYughxM3/get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Maker_AutoCommand_MakeMessengerMiddleware_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.maker.auto_command.make_messenger_middleware.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.maker.auto_command.make_messenger_middleware.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('make:messenger-middleware', [], 'Creates a new messenger middleware', false, function () use ($container): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
            return ($container->privates['maker.auto_command.make_messenger_middleware'] ?? $container->load('getMaker_AutoCommand_MakeMessengerMiddlewareService'));
        });
    }
}
