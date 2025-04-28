@extends('layouts.app')

@section('content')
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    @if(!$category->articles->isEmpty())
        <h2>Статьи в этой категории:</h2>
        <ol>
            @foreach($category->articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article->id) }}">
                        {{ $article->title }}
                    </a>
                </li>
            @endforeach
        </ol>
    @endif
@endsection