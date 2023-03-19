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
        <h1>Resultado horario</h1>
    </header>
    <main>
        <?php 
        
            $hr = strtoupper($_GET["hr"]);
            
            //verificação se o valor digitado ta correto
            if($hr == "M"){
                echo "<p>Bom Dia</p>";
            } elseif($hr == "V"){
                echo "<p>Boa Tarde</p>";
            } elseif($hr == "N"){
                echo "<p>Boa noite</p>";
            } else {
                echo "<p>Valor digitado incorreto</p>";
            }
            
        
        ?>

        <a href="index.html">Voltar</a>
    </main>
</body>
</html>