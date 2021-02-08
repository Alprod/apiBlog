<?php


namespace App\Services;


use App\Auth\AuthentificationCheckerInterface;
use App\Auth\ResourceAccessCheckerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class ResourceUpdater implements ResourceUpdaterInterface
{
    protected array $methodAllowed = [
        Request::METHOD_PUT,
        Request::METHOD_PATCH,
        Request::METHOD_DELETE
    ];

    private ResourceAccessCheckerInterface $resourceAccessChecker;
    private AuthentificationCheckerInterface $authentificationChecker;

    public function __construct(
        ResourceAccessCheckerInterface $resourceAccessChecker,
        AuthentificationCheckerInterface $authentificationChecker
    )
    {
        $this -> resourceAccessChecker = $resourceAccessChecker;
        $this -> authentificationChecker = $authentificationChecker;
    }

    public function process(string $method, UserInterface $user): bool
    {
        if(in_array($method, $this->methodAllowed,true)) {
            $this->authentificationChecker->isAuthenticated();
            $this->resourceAccessChecker->canAccess($user->getId());

            return true;
        }
        return false;
    }
}