<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>

    <form action="exercicio10.php" method="get">

        <fieldset>
            <legend>Login</legend>
            <label for="usuario"> Informe o Usuário:</label>
            <input type="text" name="usuario" id="usuario">

            <br>
            <br>

            <label for="senha"> Informe uma Senha:</label>
            <input type="text" name="senha" id="senha">

            <br>
            <br>

            <input type="submit" name="concluído" value="concluído ">
        </fieldset>
            
    </form>

    <?php
//  if (isset($_GET['usuario'])) {
//     if (empty($_GET['usuario'])) {
//         echo 'este campo é obrigatório !';
//         exit();
//     }
// } else 
//     exit();
//     if (isset($_GET['senha '])) {
//         if (empty($_GET['senha'])) {
//             echo 'este campo é obrigatório !';
//             exit();
//         }
//     } else 
//         exit();

    $usuario = $_GET['usuario'];
    $senha = $_GET['senha'];

    $certo = "Admin";
    $certa = "123";

    if ($usuario === $certo && $senha === $certa) {
    echo "Conectado com sucesso!";
    }else {
    echo "Acesso negado! Usuário ou senha incorretos!";
    }

    ?>

            


  
    
