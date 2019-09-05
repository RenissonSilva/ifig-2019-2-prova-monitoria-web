<?php

require 'config.php';

function is_logged() {
    return isset($_SESSION['user']);
}

if (!is_logged()) {
    header('location: index.php');
    exit();
}

if (!isset($_POST['client-id']) || !isset($_POST['equip']) || !isset($_POST['problem'])) {
    header('location: home.php');
    exit();
}

$client_id = $_POST['client-id'];
$equip     = $_POST['equip'];
$problem   = $_POST['problem'];

$stmt = $pdo->prepare('INSERT INTO services (client_id, equip, problem, is_open) VALUES (?, ?, ?, ?)');
$stmt->execute(array($client_id, $equip, $problem, '1'));

header('location: home.php');


?>