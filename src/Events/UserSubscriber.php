<?php


namespace App\Events;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use App\Auth\ArticleAuthorizationChecker;

class UserSubscriber implements EventSubscriberInterface
{
    private array $methodArrayNotAllowed = [
        Request::METHOD_POST,
        Request::METHOD_GET
    ];

    private ArticleAuthorizationChecker $userAuthorizationChecker;


    public function __construct(ArticleAuthorizationChecker $userAuthorizationChecker)
    {
        $this->userAuthorizationChecker = $userAuthorizationChecker;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW=>['check', EventPriorities::PRE_VALIDATE]
        ];
    }

    public function check(ViewEvent $event)
    {
        $user = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if($user instanceof User && !in_array($method, $this->methodArrayNotAllowed, true)){
            $this->userAuthorizationChecker->check($user, $method);
            $user->setUpdateAt(new \DateTimeImmutable());
        }
    }
}