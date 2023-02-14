@extends('index')

@section('title')
Login
@endsection

@section('content')
  <div class="login">
    <form action="{{route('login')}}" class="login__form" method="POST">
      @csrf
      <h2>Войти</h2>
      <input type="email" id="email" name="email" placeholder="E-mail">
      @error('email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <input type="password" id="password" name="password" placeholder="Пароль">
      @error('password')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <input class="button" type="submit" value="Войти">
      <a href="{{route('registration')}}" class="button">Регистрация</a>
    </form>
  </div>
@endsection
