<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Caméra document</title>
	
	<link rel="stylesheet" href="asset/css/design.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<script src="asset/js/qrcode.min.js"></script>
</head>

<body>
<?php // Empêche la mise en cache des documents.
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");

	$id=uniqid("", false); // Génère d'id de la session et le nom de la photo
?>
<h1>Accueil</h1>
<h2>Prise de vue (avec un portable)</h2>
<a href="photo.php?id=<?php echo $id; ?>">Prise de vue</a>
<p>Scanner le QRcode avec votre téléphone pour pouvoir prendre des photos.</p>
<div class="cadre" id="qrcode"></div>
<script>
	console.log(window.location.origin);
	var id = <?php echo json_encode($id, JSON_HEX_TAG); ?>;
	new QRCode(document.getElementById("qrcode"), window.location.origin+"/visualiseur/photo.php?id="+id);
</script>

<h2>Projection (avec un ordinateur)</h2>
<p class="cadre">Sur cet ordinateur, cliquez ici : <a href="view.php?id=<?php echo $id; ?>">projeter l'image</a></p>

</body>
</html>

