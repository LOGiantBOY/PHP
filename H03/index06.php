<?php

for ($leeftijd = 0; $leeftijd < 99; $leeftijd++) {

    if ($leeftijd < 3) {
        $prijs = 0;
    } elseif ($leeftijd <= 12) {
        $prijs = 5;
    } elseif ($leeftijd > 65) {
        $prijs = 5;
    } else {
        $prijs = 10;
    }
    echo 'iemand van ' . $leeftijd . ' betaalt ' . $prijs . " euro<br>\n" ;
}