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
    <form  method="POST" action="/register" class="form" >
    @csrf
        <p class="heading mt-2"><span>Inscription</span></p>
        <input id="name" class="input" placeholder="Nom d'Utilisateur" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="current-name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

        <input id="email" class="input" placeholder="Adresse-Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="current-name">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

        <input id="password" class="input" placeholder="Mot de Pass" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-name">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
             @enderror

        <input id="password_confirmation" class="input" placeholder="Confirmer Mot de Pass" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> 
           
        <button class="btn" name="registeradmin" id="registeradmin" type="submit" value="registeradmin">Enregistrer</button>
    </form>
</section>
</main>
@endsection