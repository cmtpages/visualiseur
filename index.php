<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Caméra document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="qrcode.min.js"></script>
</head>

<body>
<?php // Empêche la mise en cache des documents.
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
?>
<?php $id=uniqid("", false); ?>
<h1>Accueil</h1>
<h2>Prise de vue (avec un portable)</h2>
<a href="photo.php?id=<?php echo $id; ?>">Prise de vue</a>
<div id="qrcode"></div>
<script>
	console.log(window.location.origin);
	var id = <?php echo json_encode($id, JSON_HEX_TAG); ?>;
	new QRCode(document.getElementById("qrcode"), window.location.origin+"/visualiseur/photo.php?id="+id);
</script>

<h2>Ordi</h2>
<a href="view.php?id=<?php echo $id; ?>">Projeter l'image</a>


</body>
</html>

