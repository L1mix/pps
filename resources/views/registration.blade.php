@extends('index')
@section('title') Registration @endsection

@section('content')
<div class="container">
    <div class="login">
        <form action="{{route('registration')}}" method="POST" class="login_form">
            @csrf
            <h2>Регистрация</h2>
            <input type="text" name="fio" id="fio" placeholder="Фамилия И.О.">
            @error('fio')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label for="department_id">Выберите факультет</label>
            <select name="department_id" id="department_id" class="select">
                @foreach($departments as $data)
                    <option value="{{$data->id}}">{{$data->faculty}}</option>
                @endforeach
            </select>
            <label for="cathedra_id">Выберите кафедру</label>
            <select name="сathedra_id" id="сathedra_id" class="select">
                @foreach($departments as $data)
                    @foreach($data->сathedras as $сathedra)
                        <option value="{{$сathedra['id']}}">{{$сathedra['name']}}</option>
                    @endforeach
                @endforeach
            </select>
            <input type="email" name="email" id="email" placeholder="E-mail">
            @error('email')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input type="password" name="password" id="password" placeholder="Пароль">
            @error('password')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <input  type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>
@endsection