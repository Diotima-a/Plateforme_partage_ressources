<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<header class="header shadow-sm">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- Logo -->
        <div class="logo">
            <img src="{{ asset('images/HomePageImages/logo.png') }}" alt="Logo ISGI" class="img-fluid">
        </div>

        <!-- Navigation -->
        <nav class="nav">
            <ul class="d-flex list-unstyled m-0">
                <li class="mx-3"><a href="{{ route('home') }}" class="text-dark text-decoration-none">Accueil</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="container_login">
    <form class="form_container" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="title_container">
            <p class="title">Connectez-vous à votre compte</p>
            <span class="subtitle">Accédez à votre espace personnel et continuez votre parcours avec nous</span>
        </div>
        <br>

        <!-- Affichage des erreurs de validation -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Champ Email -->
        <div class="input_container">
            <label class="input_label" for="email_field">Email</label>
            <input placeholder="name@mail.com" title="Email" name="email" type="email" class="input_field" id="email_field" required>
        </div>

        <!-- Champ Mot de Passe -->
        <div class="input_container">
            <label class="input_label" for="password_field">Mot de passe</label>
            <input placeholder="Mot de passe" title="Mot de passe" name="password" type="password" class="input_field" id="password_field" required>
        </div>

        <!-- Bouton de connexion -->
        <button title="Se connecter" type="submit" class="sign-in_btn">
            <span>Se connecter</span>
        </button>

        <p class="note">Conditions d'utilisation &amp; Confidentialité</p>
    </form>
</div>

</body>
</html>
