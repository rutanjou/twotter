# Laravel - Simplon

Ce repo vous guidera pour apprendre les bases de Laravel à travers la création d'un clone de Twitter.
Chaque étape a sa propre branche, il suffit de faire un petit `git checkout step0` (step1, step2, step3...) pour changer d'étape


# Step 0

Installation
---
Cloner le repo `git clone https://github.com/amouillard/twotter`

Installer les dépendances `composer install` (si pas installé : https://getcomposer.org/download/)

Lancer le serveur local avec `php artisan serve`

Première route
---
Docs : https://laravel.com/docs/5.3/routing

Faire un petit `git checkout step0`

Dans le fichier routes/web.php, modifier la route get('app') pour qu'elle renvoie la vue 'app' en s'inspirant de la vue get('/').

En cliquant sur le lien Twotter à la racine, on doit pouvoir maintenant accéder à l'application.

Les vues se trouvent dans resources/views et finissent par .blade.php

Deuxième route
---

Dans le fichier routes/web.php, créer une autre route pour l'url '/about' qui retourne la vue 'about'.

Dans resources/views/about.blade.php mettre à jour le href du lien (ligne 17) pour revenir sur /app


Fin de la step0, on peut accéder à la page 'about' et revenir sur 'app'.

Pour passer à l'étape suivante, un petit `git add . && git commit -m 'Step 0 finie woooo' && git checkout step1`

# Step 1

