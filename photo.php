<!--
Copyright 2023 Clément PAGÈS

==========

D'après un travail d'Arnaud Durand https://www.mathix.org/macamdoc/

Licence  CC BY-NC-SA 4.0 FR https://creativecommons.org/licenses/by-nc-sa/4.0/deed.fr
-->

<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Visualiseur</title>

  <link rel="stylesheet" href="asset/css/design.css">
  <link rel="icon" type="image/x-icon" href="asset/img/favicon.png">

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
