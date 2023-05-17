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
        $users = User::withCount('articles')->orderBy('username')->get();

        return $users;
    }

    public static function getBySlug(string $user_slug): User
    {
        $user = User::whereSlug($user_slug)->firstOrFail();

        return $user;
    }

    public static function getByActive(bool $is_active): Collection
    {
        $users = User::where('active', $is_active)->orderBy('username')->get();

        return $users;
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

    public static function update(array $input, string $user_slug): bool
    {
        return User::whereSlug($user_slug)->updateOrFail($input);
    }

    public static function delete(string $user_slug): bool
    {
        return User::whereSlug($user_slug)->deleteOrFail();
    }

    public static function resetPassword(array $input, string $user_slug): bool
    {
        return User::whereSlug($user_slug)->updateOrFail(['password' => bcrypt($input['password'])]);
    }

    public static function active(string $user_slug): bool
    {
        $user = User::findBySlugOrFail($user_slug);

        return $user->updateOrFail(['active' => $user->active ? false : true]);
    }
}
