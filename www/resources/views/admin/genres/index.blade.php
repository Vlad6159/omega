@extends('main')

@section('content')
    <a href="/admin">Назад</a>
    <a href="{{route('genres.create')}}">Создать</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
        @foreach($genres as $genre)
            <tr>
                <td>{{$genre->id}}</td>
                <td>{{$genre->name}}</td>
                <td><a href="{{route('genres.edit', $genre)}}">Редактировать</a></td>
                <td>
                    <form action="{{route('genres.destroy', $genre)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить">
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
