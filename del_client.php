<?php 

require 'config.php';

function is_logged() {
    return isset($_SESSION['user']);
}

if (!is_logged()) {
    header('location: index.php');
    exit();
}

$id = $_GET['id'];

$stmt = $pdo->prepare('  
    DELETE FROM clients
    WHERE services_id = ?
');
$stmt->execute($id)

 ?>