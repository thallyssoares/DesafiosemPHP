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
            $oper = strtoupper($_GET["oper"]);

            switch($oper){
                case "MULTI":
                    for($i=1;$i<=10;$i++){
                        $calc = $num * $i;
                        echo "<p>A tabuada de $num é: <br>
                                $num x $i = $calc <br>
                        </p>";
                    } 
                    break;
                case "SUB":
                    for($i=1;$i<=10;$i++){
                        $calc = $num - $i;
                        echo "<p>A tabuada de $num é: <br>
                                $num - $i = $calc <br>
                        </p>";
                    } 
                    break;
                case "DIV":
                    for($i=1;$i<=10;$i++){
                        $calc = $num / $i;
                        echo "<p>A tabuada de $num é: <br>
                                $num / $i = $calc <br>
                        </p>";
                    } 
                    break;
                default:
                    for($i=1;$i<=10;$i++){
                        $calc = $num + $i;
                        echo "<p>A tabuada de $num é: <br>
                                $num + $i = $calc <br>
                        </p>";
                    }
                    break;
            }

        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>