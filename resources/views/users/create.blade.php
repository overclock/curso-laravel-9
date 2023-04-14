@extends('layouts.app')

@section('title', 'Criar utilizador')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Criar utilizador</h1>

@include('users.partials.validations-form')

<form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
    @include('users.partials.form')
</form>

@endsection