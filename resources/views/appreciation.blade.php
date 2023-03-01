@extends('layouts.app')

@section('title')
thank you
@endsection

<div class="m-5 d-flex flex-column justify-content-center text-bold">
    thanks {{ $user->nom}} for submit your message
    Here the form data:<br>
    <h4>Nom: {{$user->nom}}</h4>
    <h4>email: {{$user->email}}</h4>
    <h5>message: {{$user->message}}</h5>
</div>
@section('content')
