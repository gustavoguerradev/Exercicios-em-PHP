<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money converter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
    <?php 
        $url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
        $response = file_get_contents($url);
        $data = json_decode($response, true);
        
        // Obtém a cotação
        $cotacao = $data["USDBRL"]["bid"];
        $convertido = $_GET['money'] / $cotacao;
        $convertido_formatado = sprintf("%.2f", $convertido);
        echo "Cotação do Dólar: R$ " . $cotacao . "<br>";
        echo $_GET['money'] ." em dolars é igual a: US". $convertido_formatado;
    ?>
    </section>
    
</body>
</html>