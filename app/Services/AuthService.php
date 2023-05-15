<?php

namespace App\Services;

/**
 * Class AuthService.
 */
class AuthService
{
    public static function login(array $creadentials, bool $remember = false): bool
    {
        return auth()->attempt($creadentials, $remember);
    }

    public static function logout(): void
    {
        auth()->logout();
    }
}
