@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    
    @if($article->category)
        <p>Категория: 
            <a href="{{ route('article_categories.show', $article->category->id) }}">
                {{ $article->category->name }}
            </a>
        </p>
    @endif
    
    <div>{{ $article->content }}</div>
@endsection