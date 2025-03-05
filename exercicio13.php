<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 13</title>
</head>
<body>

    <form action="exercicio13.php" method="get">

        <fieldset>
            <legend>Situação do aluno:</legend>
            <label for="nome">Digite  seu nome:</label>
            <input type="text" name="nome" id="nome" placeholder="0" required>

            <br>
            <br>

            <label for="nota1"> Primeira Nota :</label>
            <input type="text" name="nota1" id="nota1" placeholder="0" required>

            <br>
            <br>

            <label for="nota2"> Segunda Nota :</label>
            <input type="text" name="nota2" id="nota2" placeholder="0" required>

            <br>
            <br>

            <label for="nota3"> Terceira Nota :</label>
            <input type="text" name="nota3" id="nota3" placeholder="0" required>

            <br>
            <br>

            <label for="nota4">Quarta Nota :</label>
            <input type="text" name="nota4" id="nota4" placeholder="0" required>

            <br>
            <br>

            <label for="frequencia"> Sua Frequência:</label>
            <input type="text" name="frequencia" id="frequencia" placeholder="0" required>


            <input type="submit" name="Verificar" value="Verificar">
        </fieldset>
            
    </form>

    <?php

    if (isset($_GET['nome'], $_GET['nota1'], $_GET['nota2'],
    $_GET['nota3'], $_GET['nota4'], $_GET['frequencia'])) {

    $nome = $_GET['nome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $nota4 = $_GET['nota4'];
    $frequencia = $_GET['frequencia'];


    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if ($media >= 7 && $frequencia >= 75) {
    echo "$nome está aprovado(a)!";

    }else {
    echo "$nome está reprovado(a)!";
    }
  }

?>
 </body>
 </html>     
      