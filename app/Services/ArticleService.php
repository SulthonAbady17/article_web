<?php

namespace App\Services;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class ArticleService.
 */
class ArticleService
{
    public static function getAll(): Collection
    {
        $articles = Article::with('user')->withCount('comments')->get();

        return $articles;
    }

    public static function getById(string $article_slug): Article
    {
        $article = Article::with('user', 'comments')->withCount('comments')->whereSlug($article_slug)->first();

        return $article;
    }

    public static function getByUser(string $user_slug): Collection
    {
        $articles = Article::withCount('comments')->whereSlug($user_slug)->get();

        return $articles;
    }

    public static function create(array $input): Article
    {
        $article = Article::create([
            'title' => $input['title'],
            'body' => $input['body'],
            'user_id' => auth()->id(),
        ]);

        $article->created(function (User $user) {
            $user->update([
                'active' => true,
            ]);
        });

        return $article;
    }

    public static function update(array $input, string $article_slug): bool
    {
        return Article::whereSlug($article_slug)->updateOrFail($input);
    }

    public static function delete(string $article_slug): bool
    {
        return Article::whereSlug($article_slug)->deleteOrFail();
    }
}
