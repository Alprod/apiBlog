<?php

namespace ContainerFs7vz0n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionNormalizerFormatterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Services\ExceptionNormalizerFormatter' shared autowired service.
     *
     * @return \App\Services\ExceptionNormalizerFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormaliserFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormalizerFormatter.php';

        return $container->privates['App\\Services\\ExceptionNormalizerFormatter'] = new \App\Services\ExceptionNormalizerFormatter();
    }
}