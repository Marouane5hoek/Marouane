<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>

<body>




<!--opdracht 1-->

<?php

$tijd = date("9");




if ($tijd < "12") {

  echo "goedemorgen!";

} else  {

  echo "goedemiddag!";

}




?>




<!--opdracht2 -->

<?php

function opsommen($a, $b) {

  return $a + $b;

}




echo opsommen(5, 10) ."\n"




?>




<!--opdracht3-->

<?php

function tijd(){




  $currentDate = date('d-m-Y');

 

  $endOfYear = date('31-12-2023');

 

  $remainingDays = (strtotime($endOfYear) - strtotime($currentDate)) / (60 * 60 * 24);

 

 

 

 

  echo "Aantal resterende dagen tot het einde van het jaar: " . $remainingDays . " dagen";

 

  }




  tijd()

?>





<?php

$klasArray = array('2AB','3AC', '4EF', '5YR');




function countArray($inputArray){

  foreach($inputArray as $klas){

    echo $klas . "\n";

  }





}




countArray($klasArray);

?>




</body>

</html>

