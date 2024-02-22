@extends('main')

@section('content')

    <a href="{{route('genres.index')}}">Жанры</a>
    <a href="{{route('performances.index')}}">Выступления</a>

@endsection
