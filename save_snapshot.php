<?php
	/*
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
	--> */
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
