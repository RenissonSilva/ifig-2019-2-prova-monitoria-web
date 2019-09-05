<?php

require 'config.php';
//a função unset destrói uma variável, nesse caso esta tirando a sessao de 'user' ,para que possa ser feito o logout
unset($_SESSION['user']);
//redireciona para index.php
header('location: index.php');

?>