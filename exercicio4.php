<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4</title>
</head>
<body>

    <form action="exercicio4.php" method="get">

        <fieldset>
            <legend>Semestre:</legend>
            <label for="mes">Mês :</label>
            <input type="text" name="mes" id="mes" placeholder="0" required>

            <input type="submit" name="verificar" value="verificar">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['mes'])) {
            if (empty($_GET['mes'])) {
                echo 'esse campo é obrigátorio!';
                exit();
            }
        } else {
            exit();
        }
        
        $mes =strtolower($_GET['mes']);

         if ( $mes == "janeiro" || $mes == "fevereiro" || $mes == "março" || $mes == "maio" || $mes == "abril" || $mes == "junho") {
            echo "primeiro semestre !";
            exit();
        }if ($mes == 'julho' || $mes == 'agosto' || $mes == 'setembro' || $mes == 'outubro' || $mes == 'novembro' || $mes == 'dezembro') {
           echo "segundo semestre !";
            exit ();
        }
        else {
            echo "mês inválido!";
            
        }
        

        
    ?>
    
</body>
</html>