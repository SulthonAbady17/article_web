<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['user.username', 'title'],
            ],
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class)->withTimestamps();
    }
}
