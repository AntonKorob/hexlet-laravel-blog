@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles</h1>
        
        <!-- Поисковая форма -->
        <form method="GET" action="{{ route('articles.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" 
                       name="q" 
                       class="form-control" 
                       placeholder="Search articles..." 
                       value="{{ $searchQuery }}">
                <button type="submit" class="btn btn-primary">Find</button>
            </div>
        </form>

        <!-- Список статей -->
        @if($articles->isEmpty())
            <div class="alert alert-info">No articles found</div>
        @else
            <div class="list-group">
                @foreach($articles as $article)
                    <a href="{{ route('articles.show', $article->id) }}" 
                       class="list-group-item list-group-item-action">
                        <h5>{{ $article->title }}</h5>
                        <p class="mb-1">{{ Str::limit($article->content, 100) }}</p>
                    </a>
                @endforeach
            </div>
            
            <!-- Пагинация -->
            <div class="mt-3">
                {{ $articles->appends(['q' => $searchQuery])->links() }}
            </div>
        @endif
    </div>

    <!-- <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2>{{$article->name}}</h2>
        {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
        {{-- Используется для очень длинных текстов, которые нужно сократить --}}

        <div>
            {{Str::limit($article->body, 200)}}
        </div>
    @endforeach -->


    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
    {{  html()->label('Имя', 'name') }}
    {{  html()->input('text', 'name') }}
    {{  html()->label('Содержание', 'body') }}
    {{  html()->textarea('body') }}
    {{ html()->submit('Создать') }}
    {{ html()->closeModelForm() }}

    @if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


@endsection