<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste For</title>
</head>
<body>
    <main>
        <h1>Teste For</h1>

        <?php 
            $nome = ["Thallys", "Tais", "Samara Tais", "Thallys Soares", "Aline", "Josué", "Aisha", "Hellena", "Maria", "Hellena Vitoria"];

            for($i=0; $i<=9; $i++){
                echo "$nome[$i] <br>";
            }
        ?>
    </main>
</body>
</html>