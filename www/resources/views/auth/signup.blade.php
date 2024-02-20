@extends('main')

@section('content')
    <div class="d-flex container justify-content-center">
        <form class="d-flex flex-column gap-2" action="{{route('register')}}" method="post">
            @csrf
            <div class="col-12">
                <label for="surname" class="form-label">Фамилия</label>
                <input type="email" class="form-control" id="surname" name="surname" placeholder="Иванов">
            </div>
            <div class="col-12">
                <label for="name" class="form-label">Имя</label>
                <input type="email" class="form-control" id="name" name="name" placeholder="Иван">
            </div>
            <div class="col-12">
                <label for="patronymic" class="form-label">Отчество</label>
                <input type="email" class="form-control" id="patronymic" name="patronymic" placeholder="Иванович">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="col-12">
                <label for="login" class="form-label">Логин</label>
                <input type="email" class="form-control" id="login" name="login" placeholder="Логин">
            </div>
            <div class="row justify-content-between gap-5">
                <div class="col">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="email" class="form-control" id="password" name="password" placeholder="Пароль">
                </div>
                <div class="col">
                    <label for="password" class="form-label">Повтор пароля</label>
                    <input type="email" class="form-control" id="password" name="password" placeholder="Повтор пароля">
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rules">
                <label class="form-check-label" for="rules">
                    Согласие с правилами регистрации
                </label>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </div>
        </form>
    </div>
@endsection
