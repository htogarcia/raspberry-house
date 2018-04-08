<?php require_once('security.php'); ?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="mycss.css">
  <script src="jquery.js" charset="utf-8"></script>
  <script src="bootstrap.js" charset="utf-8"></script>
  <script src="myjavascript.js" charset="utf-8"></script>
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

              <li class="nav-item ">
                <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sala.php">Sala</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="cocina.php">Cocina</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="comedor.php">Comedor</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="cuartoA.php">Cuarto A</a>
              </li>
              <li class="nav-item active">
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
    <div class="salaBodyRow mainBodyRow row">
      <div class="col-12 col-md-5">
        <img src="images/cuartoB.jpg" alt="" class="regularImg">
      </div>
      <div class="col-12 col-md-7">
        <div class="row">
          <div class="doubleItemsContainer col-5 col-md-6">
            <div  class="offset-3 col-6 col-lg-3 lightInfoContainer">
              <div class="bulbContainer">
                <p class="lightText itemText">Luz: Encendida</p>
                <div data-type="cuartoB-led" class="bulbIcon on itemIcon"></div>
              </div>
            </div>
          </div>
          <div class="doubleItemsContainer col-5 col-md-6">
            <div data-type="cuartoB-puerta" class="offset-3 col-6 col-lg-3 doorInfoContainer">
              <div class="doorContainer">
                <p class="doorText on itemText">Puerta: Abierta</p>
                <div data-type="cuartoB-puerta" class="doorIcon on itemIcon"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
