
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
  
    <div class="camera">
      <video id="video">Video stream not available.</video>
      <button id="bt_start">Take photo</button>
      <button id="bt_upload" value="<?php echo $_GET['id']; ?>">Upload</button>
    </div>
    <canvas id="canvas"> </canvas>

</body>
</html>
