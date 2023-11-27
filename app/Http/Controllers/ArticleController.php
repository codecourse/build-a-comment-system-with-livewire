<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __invoke(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }
}
