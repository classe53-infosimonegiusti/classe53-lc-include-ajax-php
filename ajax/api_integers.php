<?php

$min = $_GET['min'];
$max = $_GET['max'];
$items = $_GET['items'];

$numeri = [];

while (count($numeri) < $items) {
    $numeri[] = rand($min, $max);
}

$risposta = [
    'success' => true,
    'response' => $numeri
];

$oggettoJson = json_encode($risposta);

header('Content-Type: application/json');
echo $oggettoJson;