<?php
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	$img = $_POST['img'];
	$id = $_POST['id']; 
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = 'uploads/'.$id.'.png';
	
	if (file_put_contents($file, $data)) {
	echo "Photo sauvegardée.";
	} else {
	echo "La photo n'a pas pu être sauvegardée.";
	}
?>
