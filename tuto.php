<!--
Copyright 2023 Clément PAGÈS

==========

D'après un travail d'Arnaud Durand https://www.mathix.org/macamdoc/

Licence  CC BY-NC-SA 2.0 FR https://creativecommons.org/licenses/by-nc-sa/2.0/fr/legalcode
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Visualiseur</title>

  <link rel="stylesheet" href="asset/css/design.css">
</head>


<body>
<?php // Empêche la mise en cache des documents.
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
?>

<h1>Visualiseur de documents</h1>
<div class="contents_800">
	<p><a href="index.php">Revenir à l'accueil</a></p>
	<h2>Manuel d'utilisation</h2>
	<p class="align-left">Ce visualiseur de documents permet de prendre une photo avec un smartphone et d'afficher l'image sur un ordinateur, afin de pouvoir la projeter au tableau. Cela peut être utile, par exemple, pour diffuser des réponses d'élèves ou des corrections manuscrites.</p>

	<p class="align-left">Il y a trois pages : la page d'accueil, la page smartphone pour prendre les photos, et la page projection. C'est la page d'accueil qui permet de faire la jonction entre les deux autres.</p>

	<h3>La page principale</h3>
	<p class="align-left">Depuis l'ordinateur, on se rend sur <a href="index.php">la page d'accueil</a>, qui contient deux parties.</p>
	<dl class="align-left">
		<dt>Prise de vue (avec un portable)</dt><dd> Scanner le QR-code avec un smartphone pour pouvoir prendre en photo des documents.</dd>
		<dt>Projection (avec un ordinateur)</dt><dd>Cliquer sur « Projeter l'image » depuis l'ordinateur qui servira à la projection.</dd>
	</dl>

	<figure>
		<figcaption>Capture d'écran de la page d'accueil</figcaption>
		<img class="img_border" src="asset/img/tuto_accueil.png" alt="Capture d'écran de la page d'accueil" height="500"/>
	</figure>

	<h3>Prise de photo avec le smartphone</h3>
	<p class="align-left">Une fois le QR-code scanné, il faut ouvrir la page, puis autoriser l'utilisation de l'appareil photo. On voit ce que filme la caméra. On appuie sur <img  class="img_border" src="asset/img/photo.png" alt="Télécharger" width="24"/> pour prendre une photo. Puis le bouton <img class="img_border" src="asset/img/upload.png" alt="Prendre en photo" width="24"/> envoie l'image sur le serveur afin de la partager avec l'ordinateur.</p>

	<figure>
		<figcaption>Captures d'écran : autorisation d'accès à la caméra et prise de photo</figcaption>
		<img class="img_border" src="asset/img/tuto_autorisation.jpg" alt="Capture d'écran de la demande d'autorisation pour accéder à l'appareil photo depuis un smartphone" height="500" />
		<img class="img_border" src="asset/img/tuto_priseDeVue.jpg" alt="Capture d'écran de la page permettant la prise de photos depuis un smartphone" height="500" />
	</figure>

	<p class="align-left">Il est à noter que les photos sont supprimées immédiatement après leur envoi et ne sont pas conservées. Lorsque la photo a été envoyée, il est possible d'en prendre une autre et de la télécharger à nouveau. La photo précédente est alors remplacée par la nouvelle.</p>

	<h3>Projection depuis l'ordinateur</h3>
	<p class="align-left">Lorsque la photo a été prise en envoyée sur le serveur, se rendre sur la page « Projeter l'image ».</p>

	<p class="align-left">Il y a simplement deux boutons. En cliquant sur <img src="asset/img/refresh.png" alt="Actualiser" width="24"/>, on actualise la page pour charger une éventuelle nouvelle photo. Le bouton <img src="asset/img/rotate2.png" alt="Actualiser" width="24"/> tourne l'image d'un quart de tour.</p>

	<figure>
		<figcaption>Capture d'écran : page de projection depuis l'ordinateur</figcaption>
		<img src="asset/img/tuto_projection.png" alt="Capture d'écran de la page de projection" height="500" />
	</figure>
</div>

<?php include('footer.html'); ?>
</body>
</html>
