<?php

namespace ContainerImxRzZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMiniblog_Normalizer_AuthentificationExceptionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'miniblog.normalizer.authentification_exception' shared autowired service.
     *
     * @return \App\Normalizer\AuthentificationExceptionNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Normalizer/AbstractNormaliser.php';
        include_once \dirname(__DIR__, 4).'/src/Normalizer/AuthentificationExceptionNormalizer.php';
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormaliserFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Services/ExceptionNormalizerFormatter.php';

        return $container->privates['miniblog.normalizer.authentification_exception'] = new \App\Normalizer\AuthentificationExceptionNormalizer(['type' => 'App\\Exceptions\\AuthentificationException'], ($container->privates['App\\Services\\ExceptionNormalizerFormatter'] ?? ($container->privates['App\\Services\\ExceptionNormalizerFormatter'] = new \App\Services\ExceptionNormalizerFormatter())));
    }
}
