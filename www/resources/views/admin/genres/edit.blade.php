@extends('main')

@section('content')
    <h1>Редактирование жанра</h1>
    <a href="{{route('genres.index')}}">Назад</a>
    <form action="{{route('genres.update', $genre)}}" method="post">
        @csrf
        @method('patch')
        <input type="text" name="name" value="{{$genre->name}}">
        <input type="submit">
    </form>

@endsection
