<?php 

require 'config.php';

function is_logged() {
    return isset($_SESSION['user']);
}

if (!is_logged()) {
    header('location: index.php');
    exit();
}
//pega o id do cliente que será deletado
$id = $_GET['id'];

$stmt = $pdo->prepare('  
    DELETE FROM clients
    WHERE client_id = $id;
');
$stmt->execute($id);

 ?>