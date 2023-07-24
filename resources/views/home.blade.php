
<!DOCTYPE html>
<html>
<head>
    <title>Ma page d'accueil</title>
</head>
<body>
    <h1> {{ Auth::user()->name }},Bienvenue sur l'application</h1>
    <!-- Ajoutez le lien vers la page de connexion -->
    <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a>
</body>
</html>
