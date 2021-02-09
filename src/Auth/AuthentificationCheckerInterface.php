<?php

declare(strict_types=1);

namespace App\Auth;

interface AuthentificationCheckerInterface
{
    const MESSAGE_ERROR = "Vous n'êtes pas connecté";

    public function isAuthenticated(): void;
}
