<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->latest('published_at')->get();

        return response()->json($articles);
    }
}
