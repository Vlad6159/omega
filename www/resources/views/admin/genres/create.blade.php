@extends('main')

@section('content')
    <h1>Создание жанра</h1>
    <a href="{{route('genres.index')}}">Назад</a>
    <form action="{{route('genres.store')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit">
    </form>

@endsection
