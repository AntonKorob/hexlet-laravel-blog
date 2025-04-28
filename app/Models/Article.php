<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ArticleCategory;

class Article extends Model
{
    use HasFactory;

    public function catrgory()
    {
        return $this->brlongsTo(ArticleCategory::class);
    }
}
