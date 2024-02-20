@extends('main')

@section('content')
    <div class="d-flex container justify-content-center">
        <form class="d-flex gap-2 flex-column col-3" action="{{route('login')}}" method="post">
            @csrf
            <div class="col-12">
                <label for="login" class="form-label">Логин</label>
                <input type="text" class="form-control" id="login" name="login" placeholder="Логин">
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Пароль</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
        </form>
    </div>
@endsection

