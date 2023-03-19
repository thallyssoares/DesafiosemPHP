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
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        
            $menor = $_GET["num1"];
            $meio = $_GET["num2"];
            $maior = $_GET["num3"];

            if($meio < $menor){
                $tmp = $menor;
                $menor = $meio;
                $meio = $tmp;
            }

            if($maior < $menor){
                $tmp = $maior;
                $maior = $menor;
                $menor = $tmp;
            }
        
            if($maior < $meio){
                $tmp = $meio;
                $meio = $maior;
                $maior = $tmp;
            }

            echo "<p>Ordem do maior até o menor: $maior < $meio < $menor</p>";
            
            echo "<p>Maior e menor numero: $maior e $menor</p>";
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>