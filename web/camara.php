<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="mycss.css">
  <script src="jquery.js" charset="utf-8"></script>
  <script src="bootstrap.js" charset="utf-8"></script>
  <script src="myjavascript.js" charset="utf-8"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
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
              <li class="nav-item ">
                <a class="nav-link" href="comedor.php">Comedor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cuartoA.php">Cuarto A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="cuartoB.php">Cuarto B</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link nav-camera" href="camara.php">Cámara</a>
              </li>

            </ul>
          </div>
        </nav>
      </div>

    </div>
    <div class="mainBodyRow row">
      <div class="offset-2 col-6">
        <img src="images/camara.jpeg" alt="" class="regularImg">
        <button type="button" id="reloadImg" name="reloadImg"><i class="fas fa-camera fa-4x"></i>  </button>
      </div>
    </div>
  </div>
</body>

</html>
