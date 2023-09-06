<!--
Copyright 2023 Clément PAGÈS

==========

D'après un travail d'Arnaud Durand https://www.mathix.org/macamdoc/

Licence  CC BY-NC-SA 4.0 FR https://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr
-->

<!DOCTYPE html>
<html lang="fr">
<head>
	<link rel="stylesheet" href="asset/css/design.css">
	<link rel="icon" type="image/x-icon" href="asset/img/favicon.png">
	
	<script src="asset/js/rotate_img.js">
	
	</script>
	
	<title>Visualiseur</title>
</head>

<body>
	<?php
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");
		
		session_start();
	?>
	<?php $id = $_GET['id']; ?>
	<menu>
		<li><a href="view.php?id=<?php echo $id; ?>">
			<img class="button_view" src="asset/img/refresh.png" alt="Actualiser" />
		</a></li>
		<li><img class="button_view" src="asset/img/rotate2.png" alt="Tourner l'image" onclick="rotate90()" /></li>
	</menu>
	<?php if(!isset($_SESSION['id'])) {
		if(!file_exists('uploads/'.$id.'.png')) { ?>
			<p>Aucune photo pour le moment.</p>
		<?php }
		else {
			$_SESSION['id'] = $id;
			$img_path = 'uploads/'.$id.'.png'; 
			// Copie l'image dans une variable pour effacer celle enregistrée en dur
			// sans perdre l'affichage.
			$contents = file_get_contents($img_path);
			$base64 = base64_encode($contents);
			$_SESSION['base54'] = $base64;
			
			unlink($img_path); ?>
				
			<img id="photo_actuelle" src="data:image/jpg;base64,<?php echo $_SESSION['base54']; ?>">'
		<?php }
	}
	elseif(isset($_SESSION['id']) and $_SESSION['id'] != $id) { // Nouvelle session
		if(!file_exists('uploads/'.$id.'.png')) { ?>
			<p>Aucune photo pour le moment.</p>
		<?php }
		else {
			$_SESSION['id'] = $id;
			$img_path = 'uploads/'.$id.'.png'; 
			// Copie l'image dans une variable pour effacer celle enregistrée en dur
			// sans perdre l'affichage.
			$contents = file_get_contents($img_path);
			$base64 = base64_encode($contents);
			$_SESSION['base54'] = $base64;
			
			unlink($img_path); ?>
				
			<img id="photo_actuelle" src="data:image/jpg;base64,<?php echo $_SESSION['base54']; ?>">'
		<?php }
	}
	else { // Même session
		if(!file_exists('uploads/'.$id.'.png')) { ?> <!-- Ancienne image -->
			<img id="photo_actuelle" src="data:image/jpg;base64,<?php echo $_SESSION['base54']; ?>"
		<?php }
		else { // Nouvelle image
			$img_path = 'uploads/'.$id.'.png'; 
			// Copie l'image dans une variable pour effacer celle enregistrée en dur
			// sans perdre l'affichage.
			$contents = file_get_contents($img_path);
			$base64 = base64_encode($contents);
			$_SESSION['base54'] = $base64;
			
			unlink($img_path); ?>
				
			<img id="photo_actuelle" src="data:image/jpg;base64,<?php echo $_SESSION['base54']; ?>">'
		<?php } 
	} ?>

</body>
</html>

