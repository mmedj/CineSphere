<?php

$cs = curl_init();
curl_setopt($cs, CURLOPT_URL, "http://api.themoviedb.org/3/movie/".$id_movie."/credits?api_key=".$api."");
curl_setopt($cs, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cs, CURLOPT_HEADER, FALSE);
curl_setopt($cs, CURLOPT_HTTPHEADER, array("Accept: application/json"));
$response9 = curl_exec($cs);
curl_close($cs);
$movie_credits = json_decode($response9);
?>