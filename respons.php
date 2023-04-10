<?php 

//$app_name= $_POST["app"];
//$sender= $_GET["sender"];
$message=$_POST["message"];
//$phone=$_POST["phone"];
//$group_name=$_POST["group_name"];

switch ($message) {
    case "hola";
      $r="Hola Que tal, que deseas saber?";
      respuesta($r);
      break;
    case 1 ;
        $r=" tu ubicacion es :https://www.google.cl/maps/@-33.4692352,-70.6445312,12z";
        respuesta($r);
        break;
     default:
      $r="Adios";
       respuesta($r);
  }





function respuesta($r)
{

    $response = array(

        "reply" => "$r "
    );

    echo json_encode($response);
}




?>