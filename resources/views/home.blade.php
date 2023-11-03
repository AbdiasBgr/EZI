@extends('layouts.base') <!-- Vous pouvez personnaliser le nom de la mise en page selon vos besoins -->
@section('content')
<header class="header fixed-top clearfix">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- Change la couleur de la nav-bar pour une cohérence avec le background -->
        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> <!-- Ajoutes un logo -->
            Ma Fabrique
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">A propos</a>
                </li>
            </ul>
        </div>
    </nav>
    <style>
        body{
            background: url('/assets/images/pexels.jpg') no-repeat center center fixed;
            background-size: cover;
            color:white ;
        }
        .form {
            display: flex;
            flex-direction: column;
            align-items: center; 
            gap: 10px;
            background-color: white;
            padding: 5px; 
            border-radius: 25px;
            transition: .4s ease-in-out;
            box-shadow: rgba(0, 0, 0, 0.4) 1px 2px 2px;
            width: 400px; 
            height: 450px; 
            position: fixed;
            top: 12%;
            left: 43%;
        }
    </style>
</header> 
<main>
<section class="wrapped">
    <h1 style="text-align: center; margin-top: 150px; ">Bienvenue à la Fabrique</h1>
    <p style="text-align: center;">Demander un accès à notre fabrique en quelques étapes simples :</p>
    <ul style="text-align: center;">
        <div>Remplissez le formulaire de demande d'accès.</div>
        <div>Attendez la confirmation de l'administrateur.</div>
        <div>Profitez de l'accès à nos installations.</div>
    </ul>
    <section style="text-align: center;">
        <a href="/register" class="btn btn-primary">Demander un accès</a>
    </section>
</main>
@endsection
