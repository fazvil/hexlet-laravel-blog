@extends('layouts.app')
@section('content')
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
        <p>{{ $article->body }}</p>
    @endforeach
    {{ $articles->links() }}
@endsection
