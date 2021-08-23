@extends('layouts.main')

@section('title', 'Configurações')

@section('content')
    Olá, {{ $user }}
    <br>

    <a href="/logout">Sair</a>

    <h1>Config</h1>

    <br>


    @if ($access)
        <p>Você é admistrador</p>
    @endif

@endsection
