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
            $num = $_GET["num"];

            $ant = $num - 1;
            $suc = $num + 1;

            echo "<p>O numero digitado foi: $num <br> Seu antecessor é: $ant <br> Seu sucessor é: $suc</p>";
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>