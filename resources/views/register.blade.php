<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Lien vers Font Awesome (CDN) -->
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
                <li class="mx-3"><a href="{{ route('home') }}"  class="text-dark text-decoration-none">Accueil</a></li>
                  </ul>
        </nav>
    </div>
</header>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="container_login">
    <form class="form_container" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="title_container">
            <p class="title">Créez votre compte</p>
            <span class="subtitle">Lancez votre expérience dès maintenant : créez un compte et plongez dans l'univers d'exception que nous avons conçu pour vous.</span>
        </div>
        <br>
        <!-- Champ Nom -->
        <div class="input_container">
            <label class="input_label" for="name_field">Nom complet</label>

            <input placeholder="Votre nom" title="Nom" name="name" type="text" class="input_field" id="name_field" required>
        </div>

        <!-- Champ Email -->
        <div class="input_container">
            <label class="input_label" for="email_field">Email</label>

            <input placeholder="name@mail.com" title="Email" name="email" type="email" class="input_field" id="email_field" required>
        </div>
        <!-- Champ Date de Naissance -->
<div class="input_container">
    <label class="input_label" for="date_naissance">Date de naissance</label>
    <input placeholder="Date de naissance" name="date_naissance" type="date" class="input_field" id="date_naissance" required>
</div>


        <!-- Champ Mot de Passe -->
        <div class="input_container">
            <label class="input_label" for="password_field">Mot de passe</label>

            <input placeholder="Mot de passe" title="Mot de passe" name="password" type="password" class="input_field" id="password_field" required>
        </div>
        <div class="input_container">
            <label class="input_label" for="password_confirmation">Confirmez le mot de passe</label>
           <input placeholder="Confirmez le mot de passe" name="password_confirmation" type="password" class="input_field" id="password_confirmation" required>
        </div>

        <!-- Champ Type d'Utilisateur -->
        <div class="input_container">
            <label class="input_label" for="type_utilisateur">Type d'utilisateur</label>
            <select name="type_utilisateur" id="type_utilisateur" class="input_field" required>
                <option value="stagiaire">Stagiaire</option>
                <option value="formateur">Formateur</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <!-- Bouton d'Inscription -->
        <button title="S'inscrire" type="submit" class="sign-in_btn">
            <span>S'inscrire</span>
        </button>

        <p class="note">Conditions d'utilisation &amp; Confidentialité</p>
    </form>
</div>

</body>
</html>

