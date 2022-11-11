<?php
session_start();
require_once 'init.php';
require 'check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel | Sistema Seguro PHP</title>
</head>

<body>
    <h1>Painel do Usuário</h1>
    <p>Bem vindo ao seu painel
        <?php echo $_SESSION['user_name']; ?> | <a href="logout.php">Sair</a>
    </p>
</body>

</html>