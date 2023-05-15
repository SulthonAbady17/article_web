<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class UserService.
 */
class UserService
{
    public static function getAll(): Collection
    {
        $users = User::withCount('articles')->get();

        return $users;
    }

    public static function getById(User $user): User
    {
        $user->loadCount('articles');

        return $user;
    }

    public static function getByEmail(string $email): User
    {
        $user = User::firstWhere('email', $email);

        return $user;
    }

    public static function create(array $input, string $role): User
    {
        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'role' => $role,
        ]);

        return $user;
    }

    public static function update(array $input, User $user): User
    {
        $user->updateOrFail($input);

        return $user;
    }

    public static function delete(User $user): bool
    {
        return $user->deleteOrFail();
    }

    public static function resetPassword(array $input, User $user): User
    {
        $user->updateOrFail([
            'password' => bcrypt($input['password']),
        ]);

        return $user;
    }
}
