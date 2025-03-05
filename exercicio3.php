<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>

    <form action="exercicio3.php" method="get">

        <fieldset>
            <legend>Maior ou Menor?</legend>
            <label for="num">Número :</label>
            <input type="text" name="num" id="num" placeholder="0" required>

            <input type="submit" name="verificar" value="verificar">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['num'])) {
            if (empty($_GET['num'])) {
                echo 'esse campo é obrigátorio!';
                exit();
            }
        } else {
            exit();
        }
        
        $num = $_GET['num'];

         if ($num > 100  ) {
            echo "este número é maior que 100!";
            exit();
        }
         if ($num < 100  ) {
            echo "este número é menor que 100 ";
            exit();
        }
         else {
            echo "este número é igual á 100";
            
        }
        

        
    ?>
    
</body>
</html>