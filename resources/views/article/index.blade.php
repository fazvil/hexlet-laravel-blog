@extends('layouts.app')
@section('content')
    <div>
        <a href="{{route('articles.create')}}">Создать статью</a>
    </div>
    <h1>Список статей</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a></h2>
        <a href="{{route('articles.edit', $article)}}">Изменить</a>
        <a href="{{route('articles.destroy', $article)}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
        <p>{{ $article->body }}</p>
    @endforeach
    {{ $articles->links() }}
@endsection
