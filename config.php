<?php
//Informa se tem algo na sessão
if(!isset($_SESSION)){
	//inicia uma sessão ou resume caso já exista uma
    session_start();
}
//Informações do banco de dados
//nome no usuário
$db_user = 'root';
//senha
$db_pw = 'ifpe';
//host e nome do banco
$db_dsn = 'mysql:host=localhost;dbname=web-2019-2;';
//pdo é uma classe que funciona para trabalhar com o banco de dados
$pdo = new PDO($db_dsn, $db_user, $db_pw);

?>