<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Taemot</title>		
	</head>


<body>

			

<?php
//Kod skapad av Erik Andersson 2014

  
 //Hämtar värde från textfältet
$text = $_GET['text'];
  
 
  
  

  

//Ersätter stringen text's mellanslag till utan mellanslag
$test = str_replace(' ', '', $text);

//Splittar stringens ord till en array
$test = str_split($test);



//Räknar ut längden på orden i arrayen
$langd = sizeof($test);

//Räknar kvadratroten ur längden på arrayen
$rotenur = sqrt($langd);




// Skapar variabeln $rader som delar upp arrayen $test i X antal delar beroende på vad, resultatet blir av uträkningen $rotenur
$rader = array_chunk($test, $rotenur);

// Skapar tabell

echo "<table border='1'";

//Skapar en foreach som loopar igenom $rader och skapar en tabell, samt avslutar den när arrayen är slut
// Gör en echo på tr för att den inte ska starta på 0.

echo "<tr>";
//När $rader nåt sitt värde skapas en ny rad som har stilen float:left
 foreach ($rader as $rad) {
   echo "<tr style='float:left'>";
     //Loopar igenom arrayen $varde inom celler som har stilen display:block
    foreach ($rad as $varde) {
        echo "<td style='display:block';>" . $varde . "</td>";
    }
     //avsluta rader
    echo "</tr>";
}
//Stäng tabell
echo "</table>";



?>
            
</body>
</html>