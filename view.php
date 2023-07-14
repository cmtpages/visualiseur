<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="css/design.css">
	
	<script src="./rotate_img.js">
	
	</script>
	
	<title>Caméra document</title>
</head>

<body>
<?php
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
?>

<?php $id = $_GET['id']; ?>
<menu>
	<li><a href="view.php?id=<?php echo $id; ?>">
		<img class="button_view" src="refresh.png" alt="Actualiser" />
	</a></li>
	<li><img class="button_view" src="rotate2.png" alt="Tourner l'image" onclick="rotate90()" /></li>
</menu>

<div class="test"><?php if(!file_exists('uploads/'.$id.'.png')) { ?>
	<p>Aucune photo pour le moment.</p>
<?php }
else {
	$img_path = 'uploads/'.$id.'.png'; ?>
	<img id="photo_actuelle" src="<?php echo $img_path.'?'.filemtime($img_path); ?>" alt="Image à projeter">	
<?php } ?></div>

</body>
</html>

