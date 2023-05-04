
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>@yield('title', 'Laravel MyBlog')</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    @foreach ($articles as $article)
    <div>
        <h2>{{ $article->title }}</h2>
        <p>{{ $article->body }}</p>
        <p>Author: {{ $article->author->name }}</p>
    </div>
@endforeach

<ul>
    <li><a href="{{ route('articles.index') }}">All</a></li>
    @foreach ($categories as $category)
        <li><a href="{{ route('articles.index', $category->id) }}">{{ $category->name }}</a></li>
    @endforeach

    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/articles') }}">Articles</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach($categories as $category)
            <a class="dropdown-item" href="{{ url('/articles/category/'.$category->id) }}">{{ $category->name }} ({{ count($category->articles) }})</a>
            @endforeach
        </div>
    </li>
</ul>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
