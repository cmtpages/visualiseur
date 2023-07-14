<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Caméra document</title>
</head>

<body>
<?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
?>

<?php $id = $_GET['id']; ?>
<h1>Image à projeter</h1>
<p><a href="view.php?id=<?php echo $id; ?>">Actualiser</a></p>

<?php if(!file_exists('uploads/'.$id.'.png')) { ?>
	<p>Aucune photo pour le moment.</p>
<?php }
else {
	$img_path = 'uploads/'.$id.'.png'; ?>
	<img src="<?php echo $img_path.'?'.filemtime($img_path); ?>" alt="Image à projeter">
<?php } ?>

</body>
</html>

