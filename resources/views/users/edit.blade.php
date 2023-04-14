@extends('layouts.app')

@section('title', 'Editar utilizador')

@section('content')
    <h1 class="text-2xl font-semibold leading-tigh py-2">Editar utilizador - {{ $user->name }}</h1>

    @include('users.partials.validations-form')

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @method('PUT')
        @include('users.partials.form')
    </form>

@endsection

