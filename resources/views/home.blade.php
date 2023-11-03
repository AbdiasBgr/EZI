@extends('layouts.base') <!-- Vous pouvez personnaliser le nom de la mise en page selon vos besoins -->
@section('content')
<header class="header fixed-top clearfix">
    <style>
        body{
            background: linear-gradient(to right,  #feeeee, #3043f0);
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
<section class="wrapped" style="background-image: url('/assets/images/background.jpg'); background-size: cover; background-position: center center; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1 style="text-align: center; margin-top: 100px;">Bienvenue à la Fabrique</h1>
    <p style="text-align: center;">Demander un accès à notre fabrique en quelques étapes simples :</p>
    <ol style="text-align: center;">
        <li>Remplissez le formulaire de demande d'accès.</li>
        <li>Attendez la confirmation de l'administrateur.</li>
        <li>Profitez de l'accès à nos installations.</li>
    </ol>
    <a href="/login" class="btn btn-primary">Demander un accès</a>
</section>
</main>
@endsection
