<?php
$ch2 = curl_init("http://api.openweathermap.org/data/2.5/weather?id=5397765&units=metric&appid=224a99e9f1955bdd0fb89603c66e782a");
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
$jsonvalue2=curl_exec($ch2);
curl_close($ch2);
//$today = json_decode($jsonvalue2,true);
echo $jsonvalue2;
header('Content-Type: application/json');
?>
