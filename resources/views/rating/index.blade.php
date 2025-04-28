<!DOCTYPE html>
<html>
<head>
    <title>{{ $pageTitle }}</title>
    <style>
        .article { margin-bottom: 1rem; }
        .article h3 { margin: 0; }
    </style>
</head>
<body>
    <h1>{{ $pageTitle }}</h1>
    
    <div class="articles">
        @forelse($articles as $article)
            <div class="article">
                <h3>{{ $article->name }}</h3>
                <p>Лайков: {{ $article->likes_count }}</p>
            </div>
        @empty
            <p>Нет статей для отображения</p>
        @endforelse
    </div>
</body>
</html>