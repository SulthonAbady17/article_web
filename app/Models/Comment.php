<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Comment extends Model
{
    use HasFactory, Sluggable, SluggableScopeHelpers;

    protected $fillabel = [
        'body',
        'user_id',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'user.username',
            ],
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class)->withTimestamps();
    }
}
