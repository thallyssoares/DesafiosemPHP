<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Sua media</h1>
    </header>
    <main>
        <?php 
        
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];
            
            $med = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            if($med >= 7){
                echo "<p>Você foi aprovado, sua média foi $med. Parabens</p>";
            } else {
                echo "<p>Infelizmente você foi reprovado. Sua média foi $med. Estuda mais</p>";
            }
        ?>

        <a href="index.html">Voltar</a>
    </main>
</body>
</html>