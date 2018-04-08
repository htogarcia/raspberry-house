<?php

$_typeConversion = [
    "sala-led" => "LED_SALA",
    "cocina-led" => "LED_COCINA",
    "comedor-led" => "LED_COMEDOR",
    "cuartoA-led" => "LED_CUARTO_A",
    "cuartoB-led" => "LED_CUARTO_B",
    "cuartoA-puerta" => "PUERTA_CUARTO_A",
    "cuartoB-puerta" => "PUERTA_CUARTO_B",
    "puerta-principal" => "PUERTA_PRINC",
    "puerta-tras" => "PUERTA_TRAS",
    "camara" => "camara",
];


$program = "main";

if(isset($_GET["type"])) { //if "type" GET param is SET.
  $paramType = $_GET["type"];
  if (array_key_exists($paramType, $_typeConversion)){ //check if value exists
    $type = $_typeConversion[$paramType];
    if ($type === "camara"){
      ExecCameraScript();
      return true;
    }
    $programStr = "./{$program} {$type}"; //e.g: ./myprogram LED_COCINA 1
    if (isset($_GET["set"])){ //check if "set" GET param is SET
      $setVal = $_GET["set"];
      if ($setVal == 0 || $setVal == 1){ //if it's an allowed value, 0 = OFF  1 = ON
        $programStr .= " {$setVal}"; //e.g: ./main LED_COCINA 1
      }
    }
    $response = shell_exec($programStr); //FIXME * ADD REAL IMPLEMENTATION *
    echo $response;
  }else{
    echo "Error: Tipo de parámetro inválido.";
  }
}


function ExecCameraScript(){
  // $command = "sudo -u sygram -S {{ fswebcam --no-banner -r 1080x720 --jpeg 100 -D 1 -S 13 /var/www/html/temp_page/camara.jpeg }} < sudopass.secret";
  // $command = "sudo -u sygram -S {{'fswebcam --no-banner -r 1080x720 --jpeg 100 -D 1 -S 13 /var/www/html/temp_page/camara.jpeg'}} < sudopass.secret";
  // $baseCommand = "streamer -f jpeg -o image.jpeg";
  // $baseCommand = "sudo -u sygram streamer -f jpeg -o imag33.jpeg";
  $baseCommand = "sudo -u sygram fswebcam --no-banner -r 1080x720 --jpeg 100 -D 1 -S 13 acamara.jpeg";
  $command = "sudo -u sygram -S {{ {$baseCommand} }} < sudopass.secret";
  // echo `streamer -f jpeg -o imagaae.jpeg`;
  // echo `sudo fswebcam --no-banner -r 1080x720 --jpeg 100 -D 1 -S 13 camssara.jpeg`;
  // echo `sudo streamer -f jpeg -o iiistreamer.jpeg`;
  exec($baseCommand);
  echo "yay";
  // $text = shell_exec($command);
  // $text = shell_exec($baseCommand);
  // echo $command;
  // echo $command;
}



 ?>
