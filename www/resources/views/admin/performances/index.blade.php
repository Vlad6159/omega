@extends('main')

@section('content')
    <h1>Выступления</h1>
    <a href="/admin">Назад</a>
    <a href="{{route('performances.create')}}">Создать</a>

    @foreach($performances as $performance)
        <img src="{{$performance->picture}}" alt="">
        <p>{{$performance->name}}</p>
        <p>{{$performance->price}}</p>
        <p>{{$performance->age_limit}}</p>
        <p>{{$performance->date}}</p>
        <h2>Жанры:</h2>
        @foreach($performance->genres as $genre)
            <p>{{$genre->name}}</p>
        @endforeach
    @endforeach
@endsection


