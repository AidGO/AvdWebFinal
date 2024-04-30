<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://numbersapi.p.rapidapi.com/6/21/date?fragment=true&json=true",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: numbersapi.p.rapidapi.com",
		"X-RapidAPI-Key: 1eddf6f2d0msh34f62d25ef942c1p17c660jsn7c80e375a1c5"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
    $facts = json_decode($response, true);
    include_once(APP_ROOT . '/src/views/randomfactview.php');
}