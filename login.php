<?php
require 'init.php';

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($password) || empty($password)) {
    echo "Informe email e senha";
    exit;
}

$passwordHash = make_hash($password);

$PDO = db_connect();

$sql = "SELECT id, nome FROM users WHERE email = :email AND password = :password";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

$user = $users[0];

session_start();
$_SESSION['lang'] = 'pt_br';
$_SESSION['login']['logged_in'] = true;
$_SESSION['login']['user_name'] = 'Usuário 1';

header('Location: index.php');
?>