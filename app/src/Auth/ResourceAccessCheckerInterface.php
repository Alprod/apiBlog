<?php

declare(strict_types=1);

namespace App\Auth;

interface ResourceAccessCheckerInterface
{
    const MESSAGE_ERROR = 'Ce ne sont pas vos ressource';

    public function canAccess(?int $id): void;
}
