# La page `accueil.php`
C'est la page d'entrée de l'application. Elle génère un identifiant unique, stocké dans la variable `$id`, et le transmet aux pages `view.php` et `photo.php`.

## Gestion du cache
``` php
// Empêche la mise en cache des documents.
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
```

Ces lignes empêchent la mise en cache des données, pour forcer le rechargement des images en cas de session multiple. Ces lignes sont présentes sur toutes les pages du *frontend*.

## Le QR-Code
``` js 
<div class="cadre" id="qrcode"></div>
<script>
	console.log(window.location.origin);
	var id = <?php echo json_encode($id, JSON_HEX_TAG); ?>;
	new QRCode(document.getElementById("qrcode"), window.location.origin+"/visualiseur/photo.php?id="+id);
</script>
``` 

Génère et affiche un QR-Code, qui permet d'accéder à la page `photo.php` en transmettant la variable `$id`.

## Lien vers la page de projection
``` html
<p class="cadre">Sur cet ordinateur, cliquez ici : <a href="view.php?id=<?php echo $id; ?>">projeter l'image</a></p>
```
Affiche un lien vers la page `view.php` en transmettant la variable `$id` qui permet de projeter la photo prise avec le *smartphone*.
