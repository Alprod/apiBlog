<?php

namespace ContainerFs7vz0n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_DumpListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.dump_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DumpListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/EventListener/DumpListener.php';

        return $container->privates['debug.dump_listener'] = new \Symfony\Component\HttpKernel\EventListener\DumpListener(($container->services['var_dumper.cloner'] ?? $container->load('getVarDumper_ClonerService')), ($container->privates['var_dumper.contextualized_cli_dumper'] ?? $container->load('getVarDumper_ContextualizedCliDumperService')), NULL);
    }
}