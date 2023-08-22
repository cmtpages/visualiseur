# Arborescence du projet
* À la racine `/`, les différents fichiers `php` et `html`. Il y a deux sortes de fichiers :
	1. Ceux qui gèrent et affichent des pages (*front*) :
		- `footer.html` : le pied de page, inclus en bas de toutes les pages.
		- `index.php` : page d'accueil.
		- `tuto.php` : le manuel utilisateur (page statique).
		- `photo.php` : gère la prise et la sauvegarde des photos depuis un *smartphone*.
		- `view.php` : permet de voir la photo qui a été envoyée par le *smartphone*.
	2. Ceux qui gèrent l'affichage, la sauvegarde et la suppression des photos (*back*) :
		- `manage_snapshot.js` : gère l'accès à la caméra, la prise de photo et son affichage sur *smartphone*.
		- `save_snapshot.php` : sauvegarde la photo sur le serveur.
* Le dossier `uploads/` contient les photos envoyées sur le serveur.
* `asset/css/` et `asset/img/` contiennent respectivement les feuilles de style et les images statiques utilisées.
* `asset/js` contient quelques fichiers Javascript : `qrcode.min.js` pour générer des QR-Codes et `rotate_img.js` qui fait tourner une image d'un quart de tour.
