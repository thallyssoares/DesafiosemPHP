<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <main>
        <?php 
            $nome = $_GET["user"];
            $idade = $_GET["idade"];
            $salario = $_GET["salario"];
            $sexo = strtoupper($_GET["sexo"]);
            $estCivil = strtoupper($_GET["estCivil"]);
            
            $nomeTam = strlen($nome);
            
            if($nomeTam < 3){
                echo "Nome Invalido";
            }
            elseif($idade<0 || $idade>150){
                echo "Idade não permitida";
            }elseif($salario<0){
                echo "Valor Salario incorreto";
            }elseif($sexo != "F" && $sexo != "M"){
                echo "Sexo incorreto";
            } elseif($estCivil != "S" && $estCivil != "C" && $estCivil != "V" && $estCivil != "D"){
                echo "Valores digitados são incorretos";
            }else{
                $user = array("Nome"=>$nome, 
                "Idade"=>$idade, 
                "Salario"=>$salario, 
                "Sexo"=>$sexo, 
                "Estado Civil"=>$estCivil); //array com os dados do usuario.
                
                foreach($user as $indice => $valor){
                    echo "$indice: $valor <br>";                
                    //foreach varre o array e pega o $indice e o $valor correspondente a esse indice e mostra na tela.
                }
                
                

            }
        
        ?>
    </main>
</body>
</html>