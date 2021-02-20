<?php

namespace ContainerImxRzZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticle_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\Article.inner' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/DataPersister.php';

        return $container->privates['App\\DataPersister\\Article.inner'] = new \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}