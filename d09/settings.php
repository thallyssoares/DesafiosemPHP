<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar</title>
</head>
<body>
    <main>
        <h1>Analisador de numero real</h1>
        <?php 
            $realNum = $_GET["real_num"];

            $splitNum = explode(",", $realNum);

            echo "<p>Analisando o numero $realNum informado pelo usuario:</p>";
            echo "<ul> 
                <li>A parte inteira do número é $splitNum[0]</li>
                <li>A parte fracionaria é 0,$splitNum[1]</li>
            
            </ul>";
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>