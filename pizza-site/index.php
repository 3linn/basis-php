<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<div class="persoonlijkeinfo">
  <form method="post" action="mailto: elinsmit@outlook.com">
 naam:        <input name="naam" type="text" placeholder="uw naam" required /> <br> 
 adres:       <input name="adres" type="text" placeholder="uw adres" required /> <br> 
 postcode:    <input name="postcode" type="text" placeholder="uw postcode" required /> <br> 
 plaats:      <input name="plaats" type="text" placeholder="uw plaats" required /> <br> 
 bezorg datum:<input name="bezorg adres" type="time" required /> <br> <br>
</div>      
    <?php

$pizza= [
    "Pizza Margherita" => 12.50,
    "Pizza Funghi"  => 	12,50,
    "Pizza Marina" => 	13,95,
    "Pizza Hawai"  =>  11,50,
    "Pizza Quattro Formaggi" => 14,50

];


?>

<?php
foreach($pizza as $pizza => $prijs){
   echo $pizza . "€". $prijs . "<br><input type='number'>"; 
   echo "<br>";
}
?>
<input type="submit" value="Submit">
</form>
<?php
?>
</body>
</html> 