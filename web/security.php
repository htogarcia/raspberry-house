<?php


session_start();

if (!isset($_SESSION["auth"])){
  header("Location: http://localhost/temp_page/login.php");
  exit();
}
else if ($_SESSION["auth"] == "no") {
  header("Location: http://localhost/temp_page/login.php");
  exit();
}


 ?>
