<?php


namespace App\Auth;

use App\Events\AuthentificationException;
use Symfony\Component\HttpFoundation\Response as Responses;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class AuthentificationChecker implements AuthentificationCheckerInterface
{
    private ?UserInterface $user;
    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }
    public function isAuthenticated(): void
    {
        if(null === $this->user){
            throw new AuthentificationException(
                Responses::HTTP_UNAUTHORIZED,
                self::MESSAGE_ERROR);
        }
    }
}