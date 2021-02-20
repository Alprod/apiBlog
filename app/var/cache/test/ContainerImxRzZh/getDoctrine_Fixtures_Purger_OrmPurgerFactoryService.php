<?php

namespace ContainerImxRzZh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Fixtures_Purger_OrmPurgerFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.fixtures.purger.orm_purger_factory' shared service.
     *
     * @return \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/PurgerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-fixtures-bundle/Purger/ORMPurgerFactory.php';

        return $container->privates['doctrine.fixtures.purger.orm_purger_factory'] = new \Doctrine\Bundle\FixturesBundle\Purger\ORMPurgerFactory();
    }
}
