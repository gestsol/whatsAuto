<?php 

$curl = curl_init();
$hash="58ae90720dab8246ca09692bf8f518e5";

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://www.trackermasgps.com/api-v2/tracker/get_state',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => '{"hash": "'.$hash.'", "tracker_id": 10184129}',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
));

$response1 = curl_exec($curl);

curl_close($curl);




$coord = json_decode($response1);



$lat = $coord->state->gps->location->lat;

$lng = $coord->state->gps->location->lng;
?>