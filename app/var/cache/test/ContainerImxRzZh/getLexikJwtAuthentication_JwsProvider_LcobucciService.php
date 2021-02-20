<?php

namespace ContainerImxRzZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_JwsProvider_LcobucciService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'lexik_jwt_authentication.jws_provider.lcobucci' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/JWSProviderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/JWSProvider/LcobucciJWSProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyLoaderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/AbstractKeyLoader.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/KeyDumperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/lexik/jwt-authentication-bundle/Services/KeyLoader/RawKeyLoader.php';

        return $container->privates['lexik_jwt_authentication.jws_provider.lcobucci'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider(($container->services['lexik_jwt_authentication.key_loader'] ?? ($container->services['lexik_jwt_authentication.key_loader'] = new \Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader($container->getEnv('resolve:JWT_SECRET_KEY'), $container->getEnv('resolve:JWT_PUBLIC_KEY'), $container->getEnv('JWT_PASSPHRASE')))), 'openssl', 'RS256', $container->getEnv('JWT_TTL'), 0);
    }
}
