<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5</title>
</head>
<body>

    <form action="exercicio5.php" method="get">

        <fieldset>
            <legend>Consolante ou vogal ?</legend>
            <label for="letra">Letra:</label>
            <input type="text" name="letra" id="letra" placeholder="0" required>

            <input type="submit" name="verificar" value="verificar">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['letra'])) {
            if (empty($_GET['letra'])) {
                echo 'esse campo é obrigátorio!';
                exit();
            }
        } else {
            exit();
        }
        
        $letra= $_GET['letra'];

         if ( $letra == "A" || $letra == "E" || $letra == "I" || $letra =="O" || $letra == "U") {
            echo "esta letra é uma vogal !";
            exit();
        }
        
         else {
            echo "esta letra é uma consolante! ";
            
        }
        

        
    ?>
    
</body>
</html>