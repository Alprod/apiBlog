<?php

namespace App\Auth;

use App\Exceptions\ResourceAccessException;
use Symfony\Component\HttpFoundation\Response as Responses;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class ResourceAccessChecker implements ResourceAccessCheckerInterface
{
    private ?UserInterface $user;

    public function __construct(Security $security)
    {
        $this->user = $security->getUser();
    }

    public function canAccess(?int $id): void
    {
        if ($this->user->getId() !== $id) {
            throw new ResourceAccessException(Responses::HTTP_UNAUTHORIZED, self::MESSAGE_ERROR);
        }
    }
}
