@extends('main')

@section('content')
    <h1>Создать выступление</h1>
    <a href="{{route('performances.index')}}">Назад</a>
    <form action="{{route('performances.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Название">
        <input type="file" name="picture">
        <input type="number" name="cost" placeholder="Цена">
        <input type="number" name="age_limit" placeholder="Возрастной ценз">
        <input type="date" name="date">
        <input type="submit">
    </form>
@endsection
