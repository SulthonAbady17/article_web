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

    public static function getById(Comment $comment): Comment
    {
        $comment = $comment->load('user');

        return $comment;
    }

    public static function create(array $input, Article $article): Model
    {
        $comment = $article->comments()->create([
            'body' => $input['body'],
            'user_id' => auth()->id(),
        ]);

        return $comment;
    }

    public static function update(array $input, Comment $comment): Comment
    {
        $comment->updateOrFail($input);

        return $comment;
    }

    public static function delete(Comment $comment): bool
    {
        return $comment->deleteOrFail();
    }
}
