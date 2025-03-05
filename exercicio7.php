<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>

    <form action="exercicio7.php" method="get">

        <fieldset>
            <legend> Teste de Maioridade :</legend>
            <label for="ano">Ano de Nascimento :</label>
            <input type="text" name="ano" id="ano" placeholder="0" required>

            <input type="submit" name="verificar" value="verificar">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['ano'])) {
            if (empty($_GET['ano'])) {
                echo 'esse campo é obrigátorio!';
                exit();
            }
        } else {
            exit();
        }
        
        $ano= $_GET['ano'];

         if ( $ano <=  2007) {
            echo "maior de idade !";
            exit();
        }
        
         else {
            echo "Menor de idade ! ";
            
        }
        

        
    ?>
    
</body>
</html>