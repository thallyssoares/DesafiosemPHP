<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main>
        <?php 
            $peso = $_GET["peso"];

            function multa($p){
                $limit = 50;
                $excesso = $p - $limit;
                $m = 4;
                $valPagar = number_format($excesso * $m, 2, ",", ".");

                echo "<p>Você pescou: $p Kg <br> Seu excesso foi de: $excesso Kg <br> De acordo com as leis de SP, você deve pagar: R$ $valPagar</p>";
                
            }

            if($peso > 50){
                multa($peso);
            } else{
                echo "<p>Você não ultrapassou o peso maximo, por isso não paga multa. Parabens</p>";
            } 
        
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>