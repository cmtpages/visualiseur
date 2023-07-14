<!--
Copyright 2023 Clément PAGÈS

==========

        DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
                    Version 2, December 2004 

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net> 

 Everyone is permitted to copy and distribute verbatim or modified 
 copies of this license document, and changing it is allowed as long 
 as the name is changed. 

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE 
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION 

  0. You just DO WHAT THE FUCK YOU WANT TO.
-->

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
<p>Scanner le QRcode avec votre téléphone pour pouvoir prendre des photos.</p>
<div class="cadre" id="qrcode"></div>
<script>
	console.log(window.location.origin);
	var id = <?php echo json_encode($id, JSON_HEX_TAG); ?>;
	new QRCode(document.getElementById("qrcode"), window.location.origin+"/visualiseur/photo.php?id="+id);
</script>

<h2>Projection (avec un ordinateur)</h2>
<p class="cadre">Sur cet ordinateur, cliquez ici : <a href="view.php?id=<?php echo $id; ?>">projeter l'image</a></p>

<p>Les photos sont supprimées immédiatement après avoir été affichées ; elles ne sont pas réutilisées.</p>

<?php include('footer.html'); ?>
</body>
</html>

