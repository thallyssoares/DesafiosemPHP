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
        
            function hrTrabalhada(){
                $hr = $_GET["hr"];
                $sal = $_GET["sal"];

                $hrMes = $hr * 30;
                $vrHr = number_format(($sal / $hrMes), 2);

                $salPessoa = ["Hora por Dia" =>$hr,
                "Salario Mensal" => $sal, "Hora total do mês" => $hrMes, "Valor da hora"=>$vrHr];
                
                foreach ($salPessoa as $indice => $valor) {
                    echo "$indice: $valor. <br>";
                }
            }
            hrTrabalhada();
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>