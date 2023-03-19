<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros par</title>
</head>
<body>
    <main>
        <h1>Numeros Par até 80</h1>

        <?php 
            for($i=0;$i<=80;$i++){
                if(($i%2)==0){
                    echo "$i <br>";
                }
            }

        
        ?>
    </main>
</body>
</html>