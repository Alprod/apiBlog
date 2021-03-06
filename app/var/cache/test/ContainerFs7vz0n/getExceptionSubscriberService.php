<?php

namespace ContainerFs7vz0n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Events\ExceptionSubscriber' shared autowired service.
     *
     * @return \App\Events\ExceptionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Events/ExceptionSubscriber.php';
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormaliserFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormalizerFormatter.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/JsonResponseInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/JsonResponse.php';

        return $container->privates['App\\Events\\ExceptionSubscriber'] = new \App\Events\ExceptionSubscriber(($container->services['.container.private.serializer'] ?? $container->get_Container_Private_SerializerService()), ($container->privates['App\\Services\\ExceptionNormalizerFormatter'] ?? ($container->privates['App\\Services\\ExceptionNormalizerFormatter'] = new \App\Services\ExceptionNormalizerFormatter())), ($container->privates['App\\Factory\\JsonResponse'] ?? ($container->privates['App\\Factory\\JsonResponse'] = new \App\Factory\JsonResponse())));
    }
}
