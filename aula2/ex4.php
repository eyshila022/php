<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ex4.php" method="get">
    numero 1 : <br/>
    <input type="text" name= "numero1" />
    <br/><br/>
    numero 2 : <br/>
    <input type="text" name="numero2" />
    <br/><br/>
    <input type="submit" value="calcular" />
     
</form>
<?php 
// entrada
$n1 = $_GET["numero1"];
$n2 = $_GET["numero2"];

$somar = $n1 + $n2;
echo"A soma é : ".$somar;
   ?>




</body>
</html>