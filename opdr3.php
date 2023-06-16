

<?php
//Deel1
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
array_push($myArray,'boot');
foreach($myArray as $vehicle){
    echo $vehicle."\n";
}

//Deel2
$myArray = ['auto','fiets','brommer','bus','vliegtuig','trein'];
$count = count($myArray);
echo "1. Het array heeft ".$count." elementen.\n";
array_push($myArray,'boot');
$count = count($myArray);
echo "1. Het array heeft ".$count." elementen.\n";

//Deel3
2: auto
5: bus
8: vliegtuig
9: Array
12: false
19: trein

//Deel4A
function calculateAverage($numbers){
    return array_sum($numbers) / count($numbers);
}

$grades = [8,7,6,8,9,8,7,8,8,8];
$average = round(calculateAverage($grades),1);
echo "Het gemiddelde is: ".$average;

//Mijn voorkeur is om regel 6 en 7 samenvoegen omdat het code korter maakt en daardoor vaak beter leesbaar.
?>