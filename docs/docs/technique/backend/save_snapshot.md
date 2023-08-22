# Fichier `save_snapshot.js`
C'est un fichier PHP, qui doit sauvegarder la photo reçue par `manage_snapshot.js` dans le répertoire `uploads/` sur le serveur.

## Gestion du cache
``` php
// Empêche la mise en cache des documents.
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
```

Ces lignes empêchent la mise en cache des données, pour forcer le rechargement des images en cas de session multiple. Ces lignes sont présentes sur toutes les pages du *frontend*.


## Sauvegarde de l'image
``` php
	$id = $_POST['id']; 
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = 'uploads/'.$id.'.png';
```

## Message de confirmation/d'erreur
``` php
if (file_put_contents($file, $data)) {
	echo "Photo sauvegardée.";
}
else{
	echo "La photo n'a pas pu être sauvegardée.";
}
```

Le message est renvoyé à `manage_snapshot.js` et sera affiché dans une fenêtre type `alert` via Javascript.
