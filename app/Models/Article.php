<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

use App\Models\ArticleCategory;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'body'];

    public function catrgory()
    {
        return $this->brlongsTo(ArticleCategory::class);
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }


}
