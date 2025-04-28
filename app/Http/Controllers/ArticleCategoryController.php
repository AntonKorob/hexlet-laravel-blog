<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleCategory;

class ArticleCategoryController extends Controller
{
    public function show($id)
{
    $category = ArticleCategory::with('articles')->findOrFail($id);
    return view('article_category.show', compact('category'));
}
}
