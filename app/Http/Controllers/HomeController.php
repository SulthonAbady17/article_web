<?php

namespace App\Http\Controllers;

use App\Services\ArticleService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $service;
    
    public function __construct(ArticleService $articleService)
    {
        $this->service = $articleService;
    }

    public function index()
    {
        $articles = $this->service->getAll();

        return view('home.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = $this->service->getBySlug($slug);

        return view('home.show', compact('article'));
    }
}
