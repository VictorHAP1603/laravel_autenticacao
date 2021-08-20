@extends('layouts.main');

@section('title', 'Home')


@section('content')

   <section>
       <h1>Home</h1>


        @if ($nome !== '')
            <p>Meu nome é {{ $nome }} e tenho {{ $idade }} anos</p>
        @endif

        {{-- @for ($q = 0; $q < 10; $q++)
            O valor é {{$q}} <br>
            @endfor
         --}}
        {{--

        @if (count($lista) > 0)
            Lista do Bolo:
            <ul>
                @for ($i = 0; $i < count($lista); $i++)
                    <li> {{ $lista[$i] }} </li>
                @endfor

                @foreach ($lista as $num=>$ingrediente)
                    <li>{{$ingrediente}}  /// {{$num}}   </li>
                @endforeach
            </ul>
            @else
                <p>Não tem Lista</p>

        @endif --}}

        Lista de Usuário:
        <ul>
            @forelse ($lista as $item )
                <li>Nome: {{$item['nome']}} | Idade: {{$item['idade']}} </li>
            @empty
                <li>Nao tem porra nenhuma</li>
            @endforelse
        </ul>
        {{--
        @component('components.alert')
            @slot('type')
                Aviso
            @endslot

            Testanto....
        @endcomponent --}}

        <x-alert>
            @slot('type') Aviso @endslot

           Testanto....
        </x-alert>

   </section>

@endsection
