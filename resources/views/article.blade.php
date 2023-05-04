@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>{{ $article->title }}</h1>
            <p>{{ $article->body }}</p>
            <p><strong>Author:</strong> {{ $article->author->name }}</p>
            <p><strong>Category:</strong> {{ $article->category->name }}</p>
        </div>
    </div>
</div>
@endsection