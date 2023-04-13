@extends('layouts.app')

@section('title', 'Lista de utilizadores')

@section('content')
    <h1>
        Lista de utilizadores
        <a href="{{ route('users.create') }}">Criar utilizador</a>
    </h1>

    <form action="{{ route('users.index')}}" method="get">
        <input type="text" name="search" id="search">
        <button type="submit">Pesquisar</button>
    </form>

    <ul>
        @foreach($users as $user)
            <li> {{ $user->name }} - {{ $user->email }} |
                <a href="{{ route('users.show', $user->id )}}">Detalhes</a> |
                <a href="{{ route('users.edit', $user->id )}}">Editar</a>
            </li>
        @endforeach
    </ul>

@endsection

