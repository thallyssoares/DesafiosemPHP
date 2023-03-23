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
            $tipoMedida = strtoupper($_GET["medida"]);
            $temp = $_GET["temp"];

            function CelsiustoFarenheit($tempi){
                

                if($tempi == ""){
                    echo "<p>Valor digitado em branco. Tente novamente</p>";
                } else{
                    $f = number_format($tempi * 1.8 + 32, 2);
                    echo "<p>$tempi graus Celsius em Farenheit é: $f</p>";
                }
            }

            function FarenheittoCelsius($tempe){
                if($tempe == ""){
                    echo "<p>Valor digitado em branco</p>";
                } else{
                    $c = number_format((5*($tempe-32)/9), 2);
                    echo "$tempe Farenheit em graus Celsius é: $c";
                }
            }

            if($tipoMedida == "C"){
                CelsiustoFarenheit($temp);

            } elseif($tipoMedida == "F"){
                FarenheittoCelsius($temp);

            } else{
                echo "<p>Valor digitado incorreto</p>";
            }
        
        ?>
    </main>
</body>
</html>