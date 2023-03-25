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
            
            $hr = $_GET["hr"];
            $sal = $_GET["sal"];

            function hrTrabalhada($hora, $sala){
                
                //função pra calculo da hr trabalhada

                $hrMes = $hora * 30;
                $vrHr = number_format(($sala / $hrMes), 2);

                $salPessoa = ["Hora por Dia" =>$hora,
                "Salario Mensal" => $sala, "Hora total do mês" => $hrMes, "Valor da hora"=>$vrHr];
                
                foreach ($salPessoa as $indice => $valor) {
                    echo "$indice: $valor. <br>";
                }

            }
            function descontosSalarios($salario){
                //função pra calcular os descontos no seu salario.
                //IR = 11%, INSS = 8%, Sindicato = 5%.

                $descInss = ($salario /100)*8;
                $descIR = ($salario/100)*11;
                $descSindi = ($salario/100)*5;

                echo "<hr>";
                if($salario >= 1903){

                
                    $salLiquido = $salario - $descInss - $descIR - $descSindi;

                    echo "+ Salario Bruto: $salario <br> - INSS (8%): $descInss <br> - IR (11%): $descIR <br> - Sindicato: $descSindi <br> = Salario Liquido: $salLiquido";

                }else{
                    $salLiquido = $salario - $descInss - $descSindi;
                    echo "+ Salario Bruto: $salario <br> - INSS (8%): $descInss <br> - Sindicato: $descSindi <br> = Salario Liquido: $salLiquido <br>";
                }
            }
            
            hrTrabalhada($hr, $sal);
            descontosSalarios($sal);
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>