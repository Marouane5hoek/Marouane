deel 1:
<?php
for($i = 0; $i <= 50; $i++){
    echo $i ."<br>";
}
?>

Task 2:
<?php
$klasgenoten = ["Lisa", "Eva", "Jan",  "Tim", "Sophie", "Bram", "Anne", "Joost", "Sanne", "Wouter"];

foreach ($klasgenoten as $naam) {
    echo $naam . "<br>";
}
?>

deel 2 3:
<?php
$maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']; 

for($i = 0; $i < count($maanden); $i++){
    echo 'Maand '. ($i+1). ' is ' . $maanden[$i] . '.<br />';
}
?>

deel4 4:
<?php
foreach($maanden as $key=>$value){
    echo 'Maand '. ($key+1) .' is '.$value.'<br>';
}
?>