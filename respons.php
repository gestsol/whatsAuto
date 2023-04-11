<?php

//$app_name= $_POST["app"];
//$sender= $_GET["sender"];
$message1 = $_POST["message"];
$message = strtoupper($message1);
//$phone=$_POST["phone"];
//$group_name=$_POST["group_name"];

switch ($message) {
    case "HOLA";
        $r = "Hola Que tal, deseas saber la ubicación de tu Bus? <br>
          ingresa 1 ó 2 para salir";
        respuesta($r);
        break;
    case 1;
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://www.trackermasgps.com/api-v2/tracker/get_state',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{"hash": "58ae90720dab8246ca09692bf8f518e5", "tracker_id": 10184129}',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response1 = curl_exec($curl);

        curl_close($curl);




        $coord = json_decode($response1);

      

        $lat = $coord->state->gps->location->lat;

        $lng = $coord->state->gps->location->lng;
        $r = " tu ubicacion es :https://www.google.cl/maps/?q=$lat,$lng";
        respuesta($r);
        break;
    default:
        $r = "Adios";
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