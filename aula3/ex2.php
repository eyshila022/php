<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 2.faça um programa que peça 
    um número e então mostre a messagem 
    o número informado foi [número].-->
        <form action="ex2.php" method="get">
        Digite um número:
        <input type="number" name="numero"/>
        <input type="submit" value="Enviar"/>
</form>
 <?php
 $numero = $_GET["numero"];
 echo" O número Informado foi:".$numero;
 ?> 
</body>
</html>