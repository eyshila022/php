<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="post" method="ex8.php">

        <p> 8.Transforme em Celsius.</p>

        <input type="number" name="fahrenheit"/>
        <input type="submit" value="Celsius"/>
    </form>

    <br/>

    <?php
    //pegar dados do formulário
    $fahrenheit = $_POST ["fahrenheit"];


    $celsius= (5 * ( $fahrenheit-32) / 9);


    

    echo "Fahrenheit:".$fahrenheit;
    echo "Celsius:" .$celsius; 

    ?>

</body>
</html>
