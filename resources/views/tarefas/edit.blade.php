@extends('layouts.main')

@section('title', 'Tarefas')

@section('content')
    <section>
        <h1>Editar Tarefa</h1>


        <form action="/tarefas/edit/{{$tarefa->id}}" method="post">
            @csrf
            <label>
                <span>Titulo</span>
                <input type="text" name="titulo" value="{{ $tarefa->titulo }}">
            </label>

            <br>

            <button type="submit">Adicionar</button>
        </form>



        @if (session('warning'))
            <p>{{ session('warning') }}</p>
        @endif


    </section>
@endsection

