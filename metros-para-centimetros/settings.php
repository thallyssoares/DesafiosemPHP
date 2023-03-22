<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor M p/ CM</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $metro = $_GET["metro"];
            function convert($metros){
                $cm = $metros * 100;
                echo "<p>$metros metros em centimetros é: $cm cm</p>";
            }
        
            convert($metro);
        ?>
        <a href="index.html">Voltar</>
    </main>
</body>
</html>