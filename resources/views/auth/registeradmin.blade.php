@extends('layouts.base')
@include('partials.sidebar')
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
    <form class="form">
        <p class="heading mt-2"><span>Inscription</span></p>
        <input class="input" placeholder="Nom D'Utilisateur" type="text">
        <input class="input" placeholder="Mot de Pass" type="text"> 
        <button class="btn">Enregistrer</button>
    </form>
</section>
</main>
@endsection