<?php

namespace App\Controller;

use App\Entity\User;
use DateTimeImmutable;

class UserUpdatedAt
{
    public function __invoke(User $data): User
    {
        $data->setUpdateAt(new DateTimeImmutable('now'));

        return $data;
    }
}
