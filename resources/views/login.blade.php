@extends('layouts.main')

@section('title', 'Login')

@section('content')

<h1>Login</h1>
<form  method="POST">
    @csrf


    <label>
        <span>Email</span>
        <input type="email" name="email" placeholder="Digite seu E-mail">
    </label>

    <label>
        <span>Senha</span>
        <input type="password" name="password" placeholder="Digite sua Senha">
    </label>

    <button type="submit">Entrar</button>
</form>

<a href="/register">Registre-se</a>

@if (session('warning'))
    {{session('warning')}}
@endif


@endsection
