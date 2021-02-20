<?php

namespace ContainerImxRzZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ImpersonateUrlGeneratorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.impersonate_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Impersonate/ImpersonateUrlGenerator.php';

        return $container->privates['security.impersonate_url_generator'] = new \Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->privates['security.firewall.map'] ?? $container->getSecurity_Firewall_MapService()), ($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()));
    }
}
