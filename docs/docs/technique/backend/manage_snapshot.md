# Fichier `manage_snapshot.js`
C'est un fichier Javascript, mais il est considéré comme *backup* au sens où il ne s'agit pas d'une vue utilisateur. Ce script gère l'interaction avec la caméra et l'appareil photo depuis la page [photo.php](../frontend/photo.md).

Il est basé sur [cette documentation](https://developer.mozilla.org/en-US/docs/Web/API/MediaDevices/getUserMedia).

Entre les balises `<video id="video">` et `</video>`, on affiche le flux de la caméra.

Lorsque `<button id="bt_upload">` est cliqué, ce code est exécuté :
``` js
$("#bt_upload").click(function() {
	var canvas = document.getElementById('canvas');
	var dataURL = canvas.toDataURL();
	var id_picture = document.getElementById('bt_upload').value;
	$.ajax({
		type: "POST", 
		url: "save_snapshot.php", 
		data: { img: dataURL, id: id_picture }      
	}).done(function(msg){ 
		alert(msg); 
	});
});
```
Il fait appel au fichier `save_snapshot.php` pour sauvegarder la photo sur le serveur. Puis affiche le message de conformation ou d'erreur envoyé par `save_snapshot.php`.
