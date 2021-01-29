<?php


namespace App\Controller;


use App\Entity\User;

class UserUpdatedAt
{
    public function __invoke(User $data): User
    {
        // TODO: Implement __invoke() method.
        return $data;
    }
}