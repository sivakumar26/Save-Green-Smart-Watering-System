<?php
$ch = curl_init("http://api.openweathermap.org/data/2.5/forecast?id=5397765&units=metric&appid=224a99e9f1955bdd0fb89603c66e782a");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$jsonvalue=curl_exec($ch);
curl_close($ch);
echo $jsonvalue;
?>
