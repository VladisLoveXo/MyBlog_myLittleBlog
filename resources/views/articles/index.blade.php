@foreach ($articles as $article)
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
        <p>Author: {{ $article->author->name }}</p>
    </div>
@endforeach