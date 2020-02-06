<?php
$som = 0;
$filmOverzicht = array(
    "Citizen of Glass" => 4.5,
    "Night" => 9,
    "New Eyes" => 5,
    "Strange Trails" => 10
);

echo ("Het albumoverzicht:") . PHP_EOL;
foreach ($filmOverzicht as $films => $prijs) {
    $som = $som + $prijs;
    echo ("$films kost €$prijs") . PHP_EOL;
}
$gem = $som / count($filmOverzicht);
echo ("Het totaalbedrag van alle albums is €$som") . PHP_EOL;
echo ("De gemiddelde prijs van alle albums is $gem ");
