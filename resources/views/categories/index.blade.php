{{ $categories }}
@foreach ($categories as $category)
    <div>
        <h2>{{ $category->name }}</h2>
        <p>Number of articles: {{ $category->articles_count }}</p>
    </div>
@endforeach