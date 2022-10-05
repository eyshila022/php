<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lista4.php" method="get">
        Digite o valor raio:
        <input type="number" name="raio"/>
        <br/><br/>
        <input type="submit" value="calcular Raio">
</form>
<?php
// entrda
$raio= $_GET["raio"];
// P R O C E S S A M E N T O
// area = pi e ao quadrado
$m_pi = 3.1415;
//$area = $m_pi * $raio* $raio;
$area = $m_pi * $raio**2;
$perimetro = 2 * $m_pi * $raio;
// Saída 
echo"br/>O valor da Área ".$area." Do raio informado ".$raio;
echo"br/>O valor do perimetro do raio ".$raio." é ".$perimetro;
?>


</body>
</html>