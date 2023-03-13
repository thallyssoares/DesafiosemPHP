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
        
            $hr = $_GET["hr"];
            $hr = strtoupper($hr);
            //verificação se o valor digitado ta correto
            
            if($hr != "M"){
                if($hr != "V"){
                    if($hr != "N"){
                        echo "<p>O valor digitado não corresponde a um valor permitido</p>";
                    }
                }
                
            }
            else {

                //[o codigo nao ta identificando corretamente qual o valor digitado, nao mostra nd quando é "V" ou "N"

                if($hr == "V"){
                    echo "$hr Bom Dia!!";

                } else{
                    echo "$hr Boa Teste";
                }
            }
        
        
        ?>

        <a href="index.html">Voltar</a>
    </main>
</body>
</html>