<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class RatingController extends Controller
{
    public function index()
    {
        $articles = Article::query()
            ->where('state', 'published')
            ->orderBy('likes_count', 'desc')
            ->get(['name', 'likes_count']);
            
        return view('rating.index', [
            'articles' => $articles,
            'pageTitle' => 'Рейтинг статей'
        ]);
    }
}
