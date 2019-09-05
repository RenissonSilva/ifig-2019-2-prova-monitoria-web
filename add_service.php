<?php

require 'config.php';

function is_logged() {
    return isset($_SESSION['user']);
}

if (!is_logged()) {
    header('location: index.php');
    exit();
}
//Esse if está verificando se algum dos campos está nulo ou em branco,se tiver , redireciona para home.php
if (!isset($_POST['client-id']) || !isset($_POST['equip']) || !isset($_POST['problem'])) {
    header('location: home.php');
    exit();
}
//Realiza post de cada um dos elementos para que possam ser guardados no banco
$client_id = $_POST['client-id'];
$equip     = $_POST['equip'];
$problem   = $_POST['problem'];
//Insere na tabela 'services' do banco de dados as informações nas colunas client_id,equip,problem e is_open
$stmt = $pdo->prepare('INSERT INTO services (client_id, equip, problem, is_open) VALUES (?, ?, ?, ?)');
//Informa ordem e o que vai ser guardado.
$stmt->execute(array($client_id, $equip, $problem, '1'));

header('location: home.php');


?>