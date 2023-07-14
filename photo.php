
<!DOCTYPE html>
<html lang="fr">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
  <script src="./manage_snapshot.js"></script>
  <title>Caméra document</title>

</head>


<body>
  <?php header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
  ?>
  <h1>Prise de photo</h1>
  <p>
        <button id="bt_start"><img src="photo.png" alt="Prendre en photo"/></button>
        <button id="bt_upload" value="<?php echo $_GET['id']; ?>"><img src="upload.png" alt="Télécharger"/></button>
      </p>
    <video id="video">Video stream not available.</video>
      
    <canvas id="canvas"> </canvas>
</body>
</html>
