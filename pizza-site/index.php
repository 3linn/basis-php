<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<form method="post" action="mailto: elinsmit@outlook.com">
naam:        <input name="naam" type="text" placeholder="uw naam" required /> <br> 
adres:       <input name="adres" type="text" placeholder="uw adres" required /> <br> 
postcode:    <input name="postcode" type="text" placeholder="uw postcode" required /> <br> 
plaats:      <input name="plaats" type="text" placeholder="uw plaats" required /> <br> 
bezorg datum:<input name="bezorg adres" type="time" required /> <br> 
             

</div>
    <?php


$weekdagen = array ('Pizza Margherita', 'Pizza Funghi', 'Pizza Marina', 'Pizza Hawai', 'Pizza Quattro Formaggi');
$pizza= [
    "Pizza Margherita" => 12.50,
    "Pizza Funghi" => 	12,50,
    "Pizza Marina" => 	13,95,
    "Pizza Hawai"  =>  11,50,
    "Pizza Quattro Formaggi" => 14,50

];

print_r($pizza);
echo "<br>";
?>

<?php
foreach($pizza as $pizza => $prijs){
   echo $pizza . "€". $prijs;
   echo "<input type='number'>"; 
   echo "<br>";
}
?>
<input type="submit" value="Submit">
</form>
<?php
?>

</body>
</html> 