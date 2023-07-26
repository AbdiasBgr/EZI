@extends('layouts.base')
@section('content')
    <h1> {{ Auth::user()->name }},Bienvenue sur l'application</h1>
    <!-- Ajoutez le lien vers la page de connexion -->
    <a href="/login" class="btn btn-primary">Se connecter</a>
@endsection
 