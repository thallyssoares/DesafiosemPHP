<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros impares</title>
</head>
<body>
    <main>
        <h1>Numeros impares até 101</h1>
        <?php 
            $num = 0;

            while($num <= 101){
                $num++;
                if(($num%2) == 1){
                    echo "$num <br>";
                }
            }
        
        ?>
    </main>
</body>
</html>