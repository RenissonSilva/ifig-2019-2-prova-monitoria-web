<?php

require 'config.php';

function is_logged() {
    return isset($_SESSION['user']);
}

if (!is_logged()) {
    header('location: index.php');
    exit();
}

if (!isset($_POST['name']) || !isset($_POST['cep']) || !isset($_POST['num']) || !isset($_POST['compl'])) {
    header('location: home.php');
    exit();
}

$name = $_POST['name'];
$cep     = $_POST['cep'];
$num   = $_POST['num'];
$compl   = $_POST['compl'];

$stmt = $pdo->prepare('INSERT INTO clients (name, cep, num, compl) VALUES (?, ?, ?, ?)');
$stmt->execute(array($name, $cep, $num, $compl));

header('location: home.php');

?>