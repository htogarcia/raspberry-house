<?php

$database = [
  "ale" => '$2y$10$sA2vypgDsLNrsMJGIfIubeKa36E.kRtp5BOFVCF5tHbAcIvLw3s0a',
  "fran" => '$2y$10$SyVCsq7nS7SaKHlLctZzcOWmTMP9VDfTs2WCL32H7NguOo2ZPtVUG',
  "maik" => '$2y$10$qJwyYvrS/B88PaZvVHwZ4esn2AnLa7oC1qImVuc0OXupEDcWaaBjO',
];



session_start();

if(isset($_POST["username"]) && isset($_POST["password"])) {
  $user = $_POST["username"];
  $pass = $_POST["password"];
  if (array_key_exists($user, $database)){ //check if value exists
    $stored_pass = $database[$user];
    $hashMatches = password_verify($pass, $stored_pass);
    if ($hashMatches){
      $_SESSION["auth"] = "si";
      header("Location: http://localhost/temp_page/index.php");
      return true;
    }else{
      $_SESSION["auth"] = "no";
    }
  }
  else{
    $_SESSION["auth"] = "no";
  }
}

 ?>
