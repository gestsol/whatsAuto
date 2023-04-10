<?php 

//$app_name= $_POST["app"];
//$sender= $_GET["sender"];
$message1=$_POST["message"];
$message= strtoupper($message1);
//$phone=$_POST["phone"];
//$group_name=$_POST["group_name"];

switch ($message) {
    case "HOLA";
      $r="Hola Que tal, deseas saber la ubicación de tu Bus? <br>
          ingresa 1 ó 2 para salir";
      respuesta($r);
      break;
    case 1 ;
        $r=" tu ubicacion es :https://www.google.cl/maps/?q=-33.499674,-70.6247611";
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