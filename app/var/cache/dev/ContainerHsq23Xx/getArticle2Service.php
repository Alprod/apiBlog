<?php

namespace ContainerHsq23Xx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticle2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DataPersister\Article' shared autowired service.
     *
     * @return \App\DataPersister\Article
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/DataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/DataPersister/ContextAwareDataPersisterInterface.php';
        include_once \dirname(__DIR__, 4).'/src/DataPersister/Article.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/DataPersister.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/TransportInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport/Transports.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Transport.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/EmailInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Factory/Email.php';

        return $container->privates['App\\DataPersister\\Article'] = new \App\DataPersister\Article(new \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister(($container->services['doctrine'] ?? $container->getDoctrineService())), new \Symfony\Component\Mailer\Mailer((new \Symfony\Component\Mailer\Transport(new RewindableGenerator(function () use ($container) {
            yield 0 => $container->load('getMailer_TransportFactory_NullService');
            yield 1 => $container->load('getMailer_TransportFactory_SendmailService');
            yield 2 => $container->load('getMailer_TransportFactory_NativeService');
            yield 3 => $container->load('getMailer_TransportFactory_SmtpService');
        }, 4)))->fromStrings(['main' => $container->getEnv('MAILER_DSN')]), NULL, ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService())), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), new \App\Factory\Email());
    }
}
