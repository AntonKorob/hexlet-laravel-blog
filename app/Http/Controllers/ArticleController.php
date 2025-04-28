<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate();

        return view('article.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('article.show', compact('article'));
    }
    public function search(Request $request)
    {
        $query = Article::query();
        
        if ($request->has('q')) {
            $searchTerm = $request->input('q');
            $query->where('name', 'ilike', "%{$searchTerm}%");
        }
        
        $articles = $query->paginate(5);
        
        return view('article.index', [
            'articles' => $articles,
            'searchQuery' => $request->input('q', '')
        ]);
    }
}
