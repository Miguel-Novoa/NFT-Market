# NFT-Market
 Projet 2 de la formation "Développeur Multimedia" à l'Ecole Multimedia.

 Pour démarrer le projet, entrer les commandes suivantes à la racine :
 - npm install
 - php artisan migrate:fresh  (Afin d'ajouter les tables à votre base de données. Bien penser à modifier le fichier .env en indiquant les infos de votre base)
 - php artisan db:seed --class=UsersTableSeeder (afin d'ajouter 2 faux utilisateurs à la base de données, permettant de tester les fonctionnalités du site)
 - php artisan db:seed --class=NftTableSeeder (Tout comme la précédente commande mais avec des fausses données de nft cette fois-ci)
- php artisan serve (Permet de lancer le projet en local)

Le projet démarre sur la partie utilisateur. Afin d'accéder à la partie administrateur, remplacer le /home par /admin dans l'url.

Pour se connecter en tant qu'utilisateur dans la partie User :
- email : john@example.com
- mot de passe : password

Pour se connecter en tant qu'admin dans la partie admin et utilisateur :
- email : olivia@nft.com
- mot de passe : olivia

A noter que se connecter en tant qu'admin à l'interface utilisateur n'apportera aucune fonctionnalité supplémentaire.