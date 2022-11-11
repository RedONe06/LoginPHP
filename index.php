<?php
session_start();
require 'init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login em PHP</title>
</head>

<body>
    <h1>Sistema de Login em PHP</h1>
    <?php if (isLoggedIn()): ?>
    <p>Olá,
        <?php echo $_SESSION['user_name']; ?>.
        <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a>
    </p>
    <?php else: ?>
    <p>Olá, visitante. <a href="form-login.php">Login</a> </p>
    <?php endif; ?>
</body>
</html>