<?php


namespace App\Events;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\Article;
use App\Entity\User;
use App\Services\ResourceUpdaterInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use App\Auth\ArticleAuthorizationChecker;

class ResourceUpdaterSubscriber implements EventSubscriberInterface
{
    private ResourceUpdaterInterface $resourceUpdater;

    public function __construct(ResourceUpdaterInterface $resourceUpdater)
    {

        $this -> resourceUpdater = $resourceUpdater;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW=>['check', EventPriorities::PRE_VALIDATE]
        ];
    }

    public function check(ViewEvent $event)
    {
        $objet = $event->getControllerResult();

        if($objet instanceof User || $objet instanceof Article){
            $user = $objet instanceof User ? $objet : $objet->getAuthor();
            $canProcess = $this->resourceUpdater->process($event->getRequest()->getMethod(),$user);
            if ($canProcess){
                $user->setUpdateAt(new \DateTimeImmutable());
            }
        }
    }
}