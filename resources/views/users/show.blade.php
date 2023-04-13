@extends('layouts.app')

@section('title', 'Lista do utilizador')

@section('content')
    <h1> Lista de utilizadores {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type='submit'>Apagar</button>
    </form>

@endsection