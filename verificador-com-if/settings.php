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

            if($num<0 || $num>10){
                echo "Numero digitado incorreto";
            } else {
                echo "Numero digitado com sucesso foi $num <br>";
            }
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>