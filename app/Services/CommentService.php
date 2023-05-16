<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CommentService.
 */
class CommentService
{
    public static function getAll(): Collection
    {
        $comments = Comment::with('user')->get();

        return $comments;
    }

    public static function getById(string $comment_slug): Comment
    {
        $comment = Comment::with('user')->whereSlug($comment_slug)->firstOrFail();

        return $comment;
    }

    public static function create(array $input, string $article_slug): Model
    {
        $article = Article::findBySlugOrFail($article_slug);
        $comment = $article->comments()->create([
            'body' => $input['body'],
            'user_id' => auth()->id(),
        ]);

        return $comment;
    }

    public static function update(array $input, string $comment_slug): bool
    {
        return Article::whereSlug($comment_slug)->updateOrFail($input);
    }

    public static function delete(string $comment_slug): bool
    {
        return Article::whereSlug($comment_slug)->deleteOrFail();
    }
}
