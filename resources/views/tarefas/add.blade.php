@extends('layouts.main')

@section('title', 'Adicionar Tarefa')

@section('content')
    <section>
        <h1>Adicionar Tarefa</h1>


        <form action="{{ url('/tarefas/add') }}" method="POST">
            @csrf

            <label>
                <span>Titulo</span>
                <input type="text" name="titulo">
            </label>
            <br>
            <button type="submit">Adicionar</button>
        </form>

        {{-- @if (session('warning'))
            <p>{{ session('warning') }}</p>
        @endif --}}

        @if ($errors->any())
            @foreach ($errors->all() as $error )
                {{ $error }} <br>
            @endforeach
        @endif

    </section>
@endsection

