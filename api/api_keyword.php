<?php


$cb = curl_init();
curl_setopt($cb, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id_movie."/keywords?api_key=".$api."");
curl_setopt($cb, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cb, CURLOPT_HEADER, FALSE);
curl_setopt($cb, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response4 = curl_exec($cb);
curl_close($cb);
$data = json_decode($response4);

?>