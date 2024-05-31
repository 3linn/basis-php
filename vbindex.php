<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP opdracht - vertaler</title>
</head>
<body>
 <form method="post" action=''>
    naam <input name="naam" type="text" placeholder="uw naam" required /> <br> 
    leeftijd <br>
    <input type="number" name="leeftijd" > <br>
    land:
    <select name="land">
     <option value="NL"> Nederland </option>
     <option value="DE"> Duitsland </option>
     <option value="EN"> Engeland </option>
    </select>
    </br>
    <input type="submit" name="submit" value="gegevens versturen"/>
  </form>

  <?php 
	if(isset($_POST["submit"])){
	 $naam = $_POST["naam"];
		$land = $_POST["land"];
    $leeftijd = $_POST["   leeftijd"];
		if($land=='NL'){
			echo 'Goedemorgen '.$naam . ",$leeftijd";
		}
		elseif($land=='DE'){
			echo 'Guten Morgen '.$naam . ",$leeftijd";
		}
		elseif($land=='EN'){
			echo 'Good morning '.$naam .",$leeftijd";
		}
	}
	?>

   
</body>
</html>