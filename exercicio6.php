<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>

    <form action="exercicio6.php" method="get">

    <fieldset>
            <legend>Maior Número :</legend>
            <label for="num1">Número 1 :</label>
            <input type="text" name="num1" id="num1" placeholder="0" required>

            <br>

            <label for="num2">Número 2</label>
            <input type="text" name="num2" id="num2" placeholder="0" required>
            
            <input type="submit" name="calcular" value="Calcular">
            <br>

   </fieldset>
            
    </form>
    <?php
        if (isset($_GET['num1'])) {
            if (empty($_GET['num1'])) {
                echo 'esse campo é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];

        if (isset($_GET['num2'])) {
            if (empty($_GET['num2'])) {
                echo 'este campo é obrigatório!';
                exit();
            }
        } else {
            exit();
        }
       
        if ( $num1 > $num2) {
           echo ('O maior número é o primeiro ' );
           exit();
       }if ($num2 > $num1) {
        echo ("o maior número é o segundo " );
       }
       
        else {
           echo ("os números são  iguais ");
           
       }
       

 ?>
    
</body>
</html>