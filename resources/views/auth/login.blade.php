@extends('layouts.base')
@include('partials.sidebarauth')
@section('content')
<header class="header fixed-top clearfix">
    <a href="/assets/index.html" class="logo">
     <img src="/assets/images/studentcard.png" alt="logosidebar">
    </a> 
    <style>
        body{
            background: linear-gradient(to right,  #feeeee, #3043f0);
        }
    </style>
</header> 
<main>
<section class="wrapped">
    <form method="POST" action="/login" class="form">
        @csrf

        <p class="heading mt-2"><span>Authentification</span></p>
        
        <input id="email" name="email" class="input" placeholder="Adresse-Email" type="email">
            @error('email')
                <span class="invalid-feedback is-invalid" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror
        <input id="password" name="password" class="input" placeholder="Mot de Pass" type="password"> 
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

        <button name="login" id="login" type="submit" value="login" class="btn">Connexion</button>
    </form>
</section>
</main>
@endsection