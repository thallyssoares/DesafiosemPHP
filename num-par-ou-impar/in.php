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
        <h1>Resultado Impar ou Par</h1>
    </header>
    <main>
        <?php 
        
            $num = $_GET["num"];

            if($num == ""){
                echo "<p>Nenhum numero digitado</p>";
            } else{
                $result = $num % 2;

                if ($result == 0){
                    echo "<p>O numero $num é par</p>";
                } else {
                    echo "<p>O numero $num é impar</p>";
                }
            }
        
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>