<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.coinranking.com/v2/coins',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'x-access-token: coinranking45d580c8a5b9b181bec5f7823e45aab30c094ad9bfbbfb35'
  ),
));

$response = curl_exec($curl);
$responsej = json_decode($response);
    
$err = curl_error($curl);

curl_close($curl);
    
if ($err) {

  echo "cURL Error #:" . $err;

}else{
  foreach($responsej->data->coins as $coins){
    echo $coins->name;
  }

}
