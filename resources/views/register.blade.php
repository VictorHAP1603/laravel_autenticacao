@extends('layouts.main')

@section('title', 'Registrar')

@section('content')
    <h1>Registrar</h1>

    <form method="POST">
        @csrf

        <div>
            <label>
                <span>Nome</span>
                <input type="text" name="name" value="{{old('name')}}" placeholder="Digite seu Nome">
            </label>
        </div>

        <div>
            <label>
                <span>E-mail</span>
                <input type="email" name="email" value="{{old('email')}}" placeholder="Digite seu E-mail">
            </label>
        </div>

        <div>
            <label>
                <span>Senha</span>
                <input type="password" name="password" placeholder="Digite sua Senha">
            </label>
        </div>

        <div>
            <label>
                <span>Confirme a senha</span>
                <input type="password" name="password_confirmation" placeholder="Confirme sua Senha">
            </label>
        </div>

        <button type="submit" >Registrar</button>
    </form>

    <a href="/login">Faça Login</a>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

@endsection
