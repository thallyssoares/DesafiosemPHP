<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
</head>
<body>
    <main>
        <p>Numero convertido:</p>
        <?php 
            $dolar = 5.22;
            $money = $_GET["money"];

            if($money == ""){
                echo "Você não digitou um valor válido";
            } else{
                $conv = $money / $dolar;
                $format_con = number_format($conv, 2, ",", ""); //formata o numero em duas casas decimais
                echo "Seus $money equivalem a US$ $format_con";
            }
        
        ?>
        <a href="index.html">Voltar</a>
    </main> 
</body>
</html>