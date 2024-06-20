<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>


            <?php
                 // Bepaal de maximale toekomstige datum (3 maanden vanaf vandaag)
                $maxDate = date('Y-m-d', strtotime('+3 months'));
            ?>


<table id="persoonlijkeinfo">
  <form method="post" action="betalen.php">
<tr>
    <td>naam: </td>
    <td><input name="naam" type="text" placeholder="uw naam" required /></td>
</tr> 
 <tr>
    <td> adres: </td>
    <td> <input name="adres" type="text" placeholder="uw adres" required /> </td>
</tr>
<tr>
    <td> postcode: </td>
    <td> <input name="postcode" type="text" placeholder="uw postcode" required /> </td>
</tr>
<tr>
    <td> plaats: </td>
    <td> <input name="plaats" type="text" placeholder="uw plaats" required /> </td>
</tr>
<tr>
 <td> bezorg datum: </td>
  <td> <input type="date" name="date" required min="<?php echo date('Y-m-d'); ?>" max="<?php echo $maxDate; ?>"> </td>
</tr>
<tr>
     <td>bezorg tijd:</td>
                    <td><input name="bezorgtijd" type="time" required /></td>
                </tr>
</table>
</div>         
    <?php
   
$pizza= [
    "Pizza Margherita" => 12.50,
    "Pizza Funghi"  => 	12.50,
    "Pizza Marina" => 	13.95,
    "Pizza Hawai"  =>  11.50,
    "Pizza Quattro Formaggi" => 14.50

];

?>

<table id="bestellijst">
<?php

foreach($pizza as $pizza => $prijs){
   ?>
   <tr>
        <td><?php  echo $pizza; ?></td>
         <td>€: <?php echo number_format($prijs,2); ?> </td>
         <td> <input type= 'number'></td>
    </tr>
   <?php
} 
?>
<tr>
<td><input type="submit" value="Submit"></td>
</tr>
</table>
<a name="ADD" onclick="document.getElementById("formadd").submit();" href="" class="button primary">Add Camera to Database</a>
     <!-- <input type="submit" name="ADD" value="Add Camera"> --> 
</form>
<?php
?>
</body>
</html> 