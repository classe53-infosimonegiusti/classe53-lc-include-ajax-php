<?php

function getSommaNumeriCasuali($min, $max) {

    $primoNumeroCasuale = rand($min, $max);
    $secondoNumeroCasuale = rand($min, $max);

    if ($primoNumeroCasuale > $secondoNumeroCasuale) {
        return 'Il primo numero è più grande';
    } else if ($primoNumeroCasuale == $secondoNumeroCasuale) {
        return 'I due numeri sono uguali';
    } else {
        return 'Il secondo numero è più grande';
    }

}