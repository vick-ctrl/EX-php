<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>

    <form action="exercicio1.php" method="get">

        <fieldset>
            <legend>situação do aluno :</legend>
            <label for="nota">Nota :</label>
            <input type="text" name="nota" id="nota" placeholder="0" required>

            <input type="submit" name="calcular" value="Calcular">
            
        </fieldset>
            
    </form>

    <?php
        if (isset($_GET['nota'])) {
            if (empty($_GET['nota'])) {
                echo 'A  nota  é obrigatória!';
                exit();
            }
        } else {
            exit();
        }

        $nota= $_GET['nota'];
       
        if ($nota < 6 ) {
            echo "reprovado!";
            exit();
        }
        if ($nota >= 6 && $nota <= 7 ) {
            echo "recuperação";
            exit();
        }
        else {
            echo "aprovado!";
        }

        
    ?>
    
</body>
</html>