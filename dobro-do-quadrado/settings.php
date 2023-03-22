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
        <h1>Resultado do Calculo</h1>

        <?php 
            function qarea(){
                $lado = $_GET["lado"];
                $area = $lado **2;
                $dobro = $area *2;

                echo "<p>A area do quadrado de lado $lado é: $area <br> E seu dobro é: $dobro</p>";
            }
            qarea();
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>