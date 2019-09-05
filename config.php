<?php

if(!isset($_SESSION)){
    session_start();
}

$db_user = 'root';
$db_pw = 'ifpe';
$db_dsn = 'mysql:host=localhost;dbname=web-2019-2;';

$pdo = new PDO($db_dsn, $db_user, $db_pw);

?>