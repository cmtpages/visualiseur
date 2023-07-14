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
  <script src="manage_snapshot.js"></script>
</head>


<body>
  <?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
  ?>
  
  <video id="video">Video stream not available.</video>
  <p>
    <button id="bt_start"><img src="asset/img/photo.png" alt="Prendre en photo"/></button>
    <button id="bt_upload" value="<?php echo $_GET['id']; ?>"><img src="asset/img/upload.png" alt="Télécharger"/></button>
  </p>
  <canvas id="canvas"> </canvas>
</body>
</html>
