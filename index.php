<?php
//Faz uma espécie de importação dos códigos que estão guardados em config.php
require 'config.php';
//função que verifica se usuario esta logado
function is_logged() {
    //Informa se tem algo dentro de session no id user
    return isset($_SESSION['user']);
}
//Se ele estiver logado redireciona para home.php
if(is_logged()){
    header('location: home.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'header.php'; ?>
</head>
<body>
    <form action="login.php" class="login" method="POST">
        <fieldset>
            <legend>Login</legend>
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>