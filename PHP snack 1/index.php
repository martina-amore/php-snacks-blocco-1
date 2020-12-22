<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
    [
        "Squadra_casa" => "Olimpia Milano",
        "Punti_casa" => 55,
        "Squadra_ospite" => "Cantù",
        "Punti_ospite" => 60
    ],
    [
        "Squadra_casa" => "Virtus Bologna",
        "Punti_casa" => 70,
        "Squadra_ospite" => "Varese",
        "Punti_ospite" => 50
    ],
    [
        "Squadra_casa" => "Reyer Venezia",
        "Punti_casa" => 93,
        "Squadra_ospite" => "Fortitudo Bologna",
        "Punti_ospite" => 87
    ],
    [
        "Squadra_casa" => "Stella Azzurra",
        "Punti_casa" => 42,
        "Squadra_ospite" => "Trieste",
        "Punti_ospite" => 65
    ],
];

?>

<h1><?php
    for ($i = 0; $i < count($matches); $i++) {
        echo "Match " .($i + 1)
        .": "
        .$matches[$i]["Squadra_casa"]
        ." - "
        .$matches[$i]["Squadra_ospite"]
        ." | "
        .$matches[$i]["Punti_casa"]
        ."-"
        .$matches[$i]["Punti_ospite"]
        ."<br>";
    }
 ?></h1>
