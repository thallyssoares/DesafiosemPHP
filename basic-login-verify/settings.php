<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>
    <main>
        <?php 
            $email = $_GET["email"];
            $senha = $_GET["senha"];

            $emailVal = explode("@", $email);
            $senhaTam = strlen($senha);

            if($email == "" || $senha == ""){
                echo "Email ou senha não digitados";
            } elseif($emailVal[1] != "gmail.com"){
                echo "Email incorreto";
            } elseif ($senhaTam < 8){
                echo "Tamanho de senha menor que o permitido";
            }else {
                echo "USuario logado";
            }
        
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>