<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISGI - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/HomePage.css') }}">
    <!-- Lien vers Font Awesome (CDN) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
const text = "Bienvenue sur la plateforme pédagogique de l'ISGI";
const speed = 100;
let index = 0;

function typeWriter() {
    const typewriterText = document.getElementById("typewriter-text");
    if (index < text.length) {
        // Si le caractère actuel est "I", commencez à ajouter "ISGI" en vert
        if (text.slice(index, index + 4) === "ISGI") {
            typewriterText.innerHTML += "<span style='color: #28A745;'>ISGI</span>";
            index += 4;  // Avancer de 4 caractères
        } else {
            typewriterText.innerHTML += text.charAt(index);
            index++;
        }
        setTimeout(typeWriter, speed);
    }
}

window.onload = typeWriter;

</script>
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
                <li class="mx-3"><a href="#footer" class="text-dark text-decoration-none">À propos</a></li>
                <li class="mx-3"><a href="#footer" class="text-dark text-decoration-none">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<main class="container">




    <div class="head">
        <img src="{{ asset('../images/HomePageImages/HomePage1.jpg') }}" alt="Image_isgi">
        <div class="typewriter">
            <h1 id="typewriter-text"></h1>
    </div>
    </div>


<div class="container">
    <div class="row description">
        <div class="col-md-6 description_left">
            <h2>Rejoignez la Communauté ISGI et Accédez à Tous Vos Supports Pédagogiq</h2>
            <p>
            Accédez à toutes vos ressources éducatives sur une plateforme moderne et conviviale.
            L'ISGI centralise vos cours, projets et exercices dans un seul espace, vous permettant de vous
            concentrer sur l'apprentissage tout en facilitant la gestion de vos supports pédagogiques.
</p>
<button class="btn btn-register">
    <a  href="{{ route('register') }}" class="text-white text-decoration-none">S'inscrire</a>
</button>
<button class="btn btn-login">
    <a href="{{ route('login') }}" class="text-white text-decoration-none">Se connecter</a>
</button>

    </div>
        <div class="col-md-6 description_right">
            <img src="{{ asset('../images/HomePageImages/HomePage2.jpg') }}" alt="Image_isgi" class="img-fluid">
        </div>
    </div>
</div>
<div class="container">
<!--
    <h2 class="section-title">Fonctionnalités Clés</h2>
    <div class="row features">
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/search-icon.png" alt="Recherche" class="feature-icon">
                <h3>Recherche Facile</h3>
                <p>Les stagiaires peuvent rechercher des ressources éducatives par catégorie, sujet ou mot-clé afin de trouver rapidement ce dont ils ont besoin.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/download-icon.png" alt="Téléchargement" class="feature-icon">
                <h3>Téléchargement Rapide</h3>
                <p>Les stagiaires peuvent facilement télécharger les ressources nécessaires pour leur formation et leur travail pratique.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/comment-icon.png" alt="Commentaires" class="feature-icon">
                <h3>Commenter et Liker</h3>
                <p>Les stagiaires peuvent laisser des commentaires et liker les ressources pour partager leur feedback avec la communauté.</p>
            </div>
        </div>
    </div>
    <div class="row features">
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/share-icon.png" alt="Partager" class="feature-icon">
                <h3>Partager des Ressources</h3>
                <p>Les formateurs peuvent partager leurs supports de cours, projets et autres ressources éducatives avec les stagiaires.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/statistics-icon.png" alt="Statistiques" class="feature-icon">
                <h3>Suivi des Statistiques</h3>
                <p>Les formateurs peuvent suivre les statistiques des ressources qu'ils partagent, comme le nombre de téléchargements, commentaires et likes.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card">
                <img src="path/to/admin-icon.png" alt="Administration" class="feature-icon">
                <h3>Gestion Administrative</h3>
                <p>L'administration peut gérer les utilisateurs, modérer les contenus et s'assurer du bon fonctionnement de la plateforme.</p>
            </div>
        </div>
    </div>
-->
</div>



</main>

<footer class="footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>À propos de nous</h5>
                <p>
                    La plateforme ISGI est dédiée à l'échange et au partage de ressources pédagogiques pour les étudiants et formateurs. Elle offre un espace sécurisé pour centraliser les supports de cours, projets, exercices et bien plus encore.
                </p>
            </div>
            <div class="col-md-4">
                <h5>Liens rapides</h5>
                <ul class="footer-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                    <li><a href="#">Termes et conditions</a></li>
                </ul>
            </div>
            <div class="col-md-4">
    <h5>Contact</h5>

    <div class="container social-icons">

  <button><svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24"><path d="M455.27 0H56.73C25.37 0 0 25.37 0 56.73v398.54C0 486.63 25.37 512 56.73 512h398.54c31.36 0 56.73-25.37 56.73-56.73V56.73C512 25.37 486.63 0 455.27 0zM207.39 443.3H104.44V198.1h102.95v245.2zm-51.48-291.62c-33.51 0-60.7-27.16-60.7-60.74 0-33.58 27.19-60.74 60.7-60.74 33.58 0 60.74 27.16 60.74 60.74 0 33.58-27.16 60.74-60.74 60.74zm320.06 291.62h-102.95V308.9c0-31.48-11.17-52.85-35.77-52.85-19.45 0-31.92 13.06-37.2 25.71-1.93 4.68-2.42 11.13-2.42 17.64v144.84h-102.95V198.1h102.95v55.1h1.48c13.57-20.74 37.34-51.88 81.64-51.88 59.7 0 105.64 39.01 105.64 122.5v161.58z"></path></svg></button>

  <button class="social-btn instagram-btn">
  <svg fill="white" class="svgIcon" viewBox="0 0 448 512" height="1.5em" xmlns="http://www.w3.org/2000/svg"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
  </button>
</div>


        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p>&copy; 2024 ISGI. Tous droits réservés.</p>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

