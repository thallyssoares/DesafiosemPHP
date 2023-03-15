<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Reajuste</title>
</head>
<body>
    <header>
        <h1>Seu ajuste salarial</h1>
    </header>
    <main>
        <p>Aqui seu reajuste salarial</p>
        <?php 
        
            $sal = $_GET["sal"];

            if($sal <= 280){
                $pct = 20;
                $aumento = (($sal / 100) * $pct);
                $newSal = $sal + $aumento;
                echo "<p>Seu salario anterior era: $sal <br> Você teve um aumento de: $pct% <br> O valor do aumento foi de: $aumento <br> Agora esse é seu novo salario: $newSal </p>";
            } elseif($sal > 280 and $sal <= 700){
                $pct = 15;
                $aumento = (($sal / 100) * $pct);
                $newSal = $sal + $aumento;
                echo "<p>Seu salario anterior era: $sal <br> Você teve um aumento de: $pct% <br> O valor do aumento foi de: $aumento <br> Agora esse é seu novo salario: $newSal </p>";
            } elseif($sal > 700 and $sal <= 1500){
                $pct = 10;
                $aumento = (($sal / 100) * $pct);
                $newSal = $sal + $aumento;
                echo "<p>Seu salario anterior era: $sal <br> Você teve um aumento de: $pct% <br> O valor do aumento foi de: $aumento <br> Agora esse é seu novo salario: $newSal </p>";
            } else{
                $pct = 5;
                $aumento = (($sal / 100) * $pct);
                $newSal = $sal + $aumento;
                echo "<p>Seu salario anterior era: $sal <br> Você teve um aumento de: $pct% <br> O valor do aumento foi de: $aumento <br> Agora esse é seu novo salario: $newSal </p>";
            }
        
        
        ?>

        <a href="index.html">Voltar</a>
    </main>
</body>
</html>