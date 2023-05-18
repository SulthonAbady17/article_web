<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCard extends Component
{
    public Article $article;
    public int $count = 2;

    public function showAll()
    {
        $this->count += 2;
    }

    public function mount()
    {
        $this->article->load(['comments' => function ($query) {
            $query->limit($this->count);
        }]);
    }

    public function render()
    {
        return view('livewire.article-card');
    }
}
