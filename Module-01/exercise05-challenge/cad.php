<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real number analyzer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
        $number = $_GET['number'] ??'0';
        $partes = explode(',', $number);
        echo "A parte inteira é igual a: " . $partes[0] . "<br>";
        echo "A parte fracionária é igual a: 0," . $partes[1];
    ?>
    </section>
    
</body>
</html>