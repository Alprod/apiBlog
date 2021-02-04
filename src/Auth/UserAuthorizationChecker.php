<?php


namespace App\Auth;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class UserAuthorizationChecker
{
    private array $methodArrayAllowed = [
        Request::METHOD_PUT,
        Request::METHOD_PATCH,
        Request::METHOD_DELETE
    ];

    private ?UserInterface $user;


    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function check(UserInterface $user, string $method)
    {
        $this->isAuthenticated();

        if ($this->isMethodAllowed($method) &&
            $user->getId() !== $this->user->getId()
        ) {
            $errorMessage = "Ce ne sont pas vos ressource";
            throw new UnauthorizedHttpException($errorMessage, $errorMessage);
        }
    }

    public function isAuthenticated():void
    {
        if(null === $this->user){
            $errorMessage = "Vous n'êtes pas connecté";
            throw new UnauthorizedHttpException($errorMessage, $errorMessage);
        }
    }

    public function isMethodAllowed(string $method):bool
    {
        return in_array($method, $this->methodArrayAllowed,true);
    }
}