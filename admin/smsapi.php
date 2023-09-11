<?php

$phone="+250786232347";
$sms="hello";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.mista.io/sms',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('to' => $phone,'from' => 'STMP','unicode' => '0','sms' => $sms,'action' => 'send-sms'),
  CURLOPT_HTTPHEADER => array(
    'x-api-key:104|DGd1MSVUczaGGQV3AUrawMUGlP6yUggiIoD7IUL9'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;   

?>