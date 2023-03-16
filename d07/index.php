<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomizador</title>
</head>
<body>
    <header>
        <p>Gerando numero aleatorio entre 0 e 100</p>
        <?php 
            $num = rand(0, 100);

            echo "<p>O numero gerado foi $num</p>";

        
        ?>
        
        <a href="index.php">Gerar outro numero</a>
    </main>
</body>
</html>