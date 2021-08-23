@extends('layouts.main')

@section('title', 'Tarefas')

@section('content')
    <section>
        <h1>Tarefas</h1>

        <a href="/logout">Sair</a>
        <br>
        <a href="{{ url('/tarefas/add') }}">Adicionar Tarefa</a>
        <br>
        <a href="{{ url('/config') }}">Configurações</a>


        @if (count($list) > 0)
            <table border="1" width="100%" >
                <thead>
                    <th>Tarefa</th>
                    <th>Resolvido?</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td style="text-align: center; padding: 10px;">{{$item->titulo}}</td>
                            <td style="text-align: center; padding: 10px;">
                                @if ($item->resolvido === 1) Resolvido @else Em aberto @endif
                            </td>

                            <td style="text-align: center">
                                <a href="/tarefas/marcar/{{$item->id}}">[ Mudar Status ]</a>
                                ||
                                <a href="/tarefas/edit/{{$item->id}}">[ Editar ]</a>
                                ||
                                <a
                                href="/tarefas/delete/{{$item->id}}"
                                onclick="return confirm('Deseja realmente excluir?')">
                                    [ Excluir ]
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        @else
            Não há tarefas a serem listadas
        @endif


    </section>
@endsection

