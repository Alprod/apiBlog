<?php

namespace App\Events;

use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordEncoderSubscriber implements EventSubscriberInterface
{
    private UserPasswordEncoderInterface $_encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->_encoder = $encoder;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::VIEW => ['encodePassword', EventPriorities::PRE_WRITE],
        ];
    }

    public function encodePassword(ViewEvent $event)
    {
        $user = $event->getControllerResult();

        if ($user instanceof User) {
            $passHash = $this->_encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($passHash);
        }
    }
}
