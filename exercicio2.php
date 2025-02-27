<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
</head>
<body>

    <form action="exercicio2.php" method="get">

        <fieldset>
            <legend>Votação :</legend>
            <label for="nota">Idade</label>
            <input type="text" name="idade" id="idade" placeholder="0" required>

            <input type="submit" name="verificar" value="verificar">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['idade'])) {
            if (empty($_GET['idade'])) {
                echo 'esse campo é obrigátorio!';
                exit();
            }
        } else {
            exit();
        }
        
        $idade= $_GET['idade'];

         if ($idade >=18 && $idade <=70) {
            echo "voto obrigatorio";
            exit();
        }
         if ( $idade >= 0 && $idade <= 15) {
            echo "Você não pode votar  ";
            exit();
        }
         else {
            echo "voto permitido mas nao obrigatorio !";
            
        }
        

        
    ?>
    
</body>
</html>