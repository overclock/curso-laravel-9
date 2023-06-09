@extends('layouts.app')

@section('title', 'Lista do utilizador')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2"> Lista de utilizadores {{ $user->name }}</h1>

    <ul>
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
    </ul>

    <form action="{{ route('users.destroy', $user->id)}}" method="post">
        @csrf
        @method('DELETE')

        <button type='submit' class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Apagar</button>
    </form>

@endsection