@foreach ($authors as $author)
    <div>
        <h2>{{ $author->name }}</h2>
        <p>Number of articles: {{ $author->articles_count }}</p>
    </div>
@endforeach