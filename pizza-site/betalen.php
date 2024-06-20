<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
</head>
<body>
<?php
$adresgegevens = [
    'naam' => $_POST['naam'],
    'adres' => $_POST['adres'],
    'postcode' => $_POST['postcode'],
    'plaats' => $_POST ['plaats'],
    'bezorgdatum' => $_POST ['date'],
    'bezorgtijd' => $_POST ['bezorgtijd'] 
];





?>
<table>
    <?php
foreach($adresgegevens as $key => $gegevens){
?>
<tr>
    <td><?php echo $key; ?></td>
    <td><?php echo $gegevens ?></td>
</tr>
<?php
};
?>
</table>
<?php


?>
</body>
</html>