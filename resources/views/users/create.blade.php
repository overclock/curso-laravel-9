@extends('layouts.app')

@section('title', 'Criar utilizador')

@section('content')
    <h1>Criar utilizador</h1>

    @if ($errors->any())
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li class='error'> {{ $error }} </li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome:" value="{{ old('name') }}">
        <input type="email" name="email" id="email" placeholder="Email:" value="{{ old('email') }}">
        <input type="password" name="password" id="password" placeholder="Password:" value="{{ old('password') }}">
        <button type="submit">Gravar</button>
    </form>

@endsection

