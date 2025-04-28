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

    public function create()
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:100',
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        $article->name = $request->input('name');
        $article->body = $request->input('body');

        return redirect()
            ->route('articles.index');
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $data = $request->validate([
            'name' => "required|unique:articles,name,{$article->id}",
            'body' => 'required|min:100',
        ]);

        $article->fill($data);
        $article->save();
        return redirect()
            ->route('articles.index');
    }
}
