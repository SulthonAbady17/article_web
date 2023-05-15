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

    public static function getById(Article $article): Article
    {
        $article->load('user', 'comments')->loadCount('comments');

        return $article;
    }

    public static function getByUser(): Collection
    {
        $articles = Article::withCount('comments')->where('user_id', auth()->id())->get();

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

    public static function update(array $input, Article $article): Article
    {
        $article->updateOrFail($input);

        return $article;
    }

    public static function delete(Article $article): bool
    {
        return $article->deleteOrFail();
    }
}
