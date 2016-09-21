<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="style.css"> </head>

<body>
	
<div id="container">
	<?php 
    $norm1 = $_POST['norm1'];
    $naam = $_POST['naam'];
    $fouten = $_POST['fouten'];
    $lowercasenaam = strtolower($naam);
    $naamucfirst = ucfirst($lowercasenaam);
    $norm = $fouten / $norm1;
    $cijfer = 10 - $norm;
    $cijfer = round($cijfer, 1);
    
    if ($cijfer < 0 ){$cijfer = 0;}
    if ($naam)
    {
        if (!$fouten == "")
        {
            if (strlen($fouten)<3)
            {
                if (preg_match('/^[0-9]*$/', $fouten)) 
                {
                    if ($norm1){
                        
                        echo "Hallo, ". $naamucfirst. "<br><br>";
                        echo "Je hebt ". $fouten. " fouten ingevuld."."<br>";
                        echo "Ingevoerde norm: " . $norm1.".<br>";
                        echo "Dus jouw cijfer is: ".$cijfer. ".<br>";
                    }else{echo "Je moet de norm invoeren!";}
                } 
                else {echo "Fouten graag in cijfers invullen !";}
            } 
            else {echo "Helaas, het getal mag niet meer dan 2 cijfers bevatten !"."<br>";}   
        }
        else {echo "Vul je aantal fouten in!"."<br>";}
    }
    else {echo "Vul je naam in!"."<br>";}
?> <br><a href="1a.php">Terug naar het formulier</a> 
	</div> 
	</body>

</html>