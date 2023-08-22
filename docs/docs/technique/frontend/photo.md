# La page `photo.php`
Cette page gère accès à l'appareil photo du *smartphone* et permet la prise de photos.

## Gestion du cache
``` php
// Empêche la mise en cache des documents.
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$id=uniqid("", false); // Génère l'id de la session et le nom de la photo
```

Ces lignes empêchent la mise en cache des données, pour forcer le rechargement des images en cas de session multiple. Ces lignes sont présentes sur toutes les pages du *frontend*.

## Affichage des prises de vue
``` html
<video id="video">Video stream not available.</video>
```
Prépare le cadre pour afficher l'image vue par l'appareil photo. Affiche `Video stream not available.` en cas d'erreur.

``` php
<p>
	<button id="bt_start"><img src="asset/img/photo.png" alt="Prendre en photo"/></button>
	<button id="bt_upload" value="<?php echo $_GET['id']; ?>"><img src="asset/img/upload.png" alt="Télécharger"/></button>
</p>
```
Boutons pour prendre une photo, et envoyer la photo sur le serveur. Lors de l'appui sur le bouton `bt_upload`, le fichier *backend* `manage_snapshot.js` est appelé et cela permet de sauvegarder la photo sur le serveur. La photo est alors nommée `$id.jpg`.

Si une nouvelle photo est sauvegardée, elle remplace la précédente avec le même nom.
