<?php require_once('security.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="mycss.css">
  <script src="jquery.js" charset="utf-8"></script>
  <script src="bootstrap.js" charset="utf-8"></script>
  <script src="myjavascript.js" charset="utf-8"></script>
  <meta name="viewport" content="width=device-width, user-scalable=no" />
  <meta charset="utf-8">
  <title>Embebidos</title>
</head>

<body>
  <div class="container-fluid">
    <div class="navContainer row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">Embebidos&trade;</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sala.php">Sala</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cocina.php">Cocina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comedor.php">Comedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cuartoA.php">Cuarto A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cuartoB.php">Cuarto B</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-camera" href="camara.php">Cámara</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <div class="row imagesWrapper">
      <div class="col-12 col-md-4 imageContainer">
        <a href="sala.php"><img src="images/sala.jpg" alt="" class="houseImage"></a>
        <div class="divFade">
          <span>Sala</span>
        </div>
      </div>
      <div class="col-12 col-md-4 imageContainer">
        <a href="cuartoA.php"><img src="images/cuartoA.jpg" alt="" class="houseImage"></a>
        <div class="divFade">
          <span>Cuarto A</span>
        </div>
      </div>
      <div class="col-12 col-md-4 imageContainer">
        <a href="cuartoB.php"><img src="images/cuartoB.jpg" alt="" class="houseImage"></a>
        <div class="divFade">
          <span>Cuarto B</span>
        </div>
      </div>
      <div class="col-12 col-md-4 imageContainer">
        <a href="comedor.php"><img src="images/comedor.jpg" alt="" class="houseImage"></a>
        <div class="divFade">
          <span>Comedor</span>
        </div>
      </div>
      <div class="col-12 col-md-4 imageContainer">
        <a href="cocina.php"><img src="images/cocina.jpg" alt="" class="houseImage"></a>
        <div class="divFade">
          <span>Cocina</span>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
