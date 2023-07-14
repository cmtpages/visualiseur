
<!DOCTYPE html>
<html lang="fr">
<head>
  <title>Caméra document</title>

  <link rel="stylesheet" href="css/design.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="./manage_snapshot.js"></script>
</head>


<body>
  <?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
  ?>
  <menu>
    <li><button id="bt_start"><img src="photo.png" alt="Prendre en photo"/></button></li>
    <li><button id="bt_upload" value="<?php echo $_GET['id']; ?>"><img src="upload.png" alt="Télécharger"/></button></li>
  </menu>
    <video id="video">Video stream not available.</video>
      
    <canvas id="canvas"> </canvas>
</body>
</html>
