<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
    $number = $_GET["number"];
    $antecessor = $number - 1;
    $sucessor = $number + 1;

    echo "O numero escolhido foi: $number <br>" ;
    echo "Seu sucessor: $sucessor <br>";
    echo "Seu antecessor: $antecessor";
    ?>
    </section>
    
</body>
</html>