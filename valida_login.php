<?php

session_start();

$_SESSION['x'] = 'Oi, sou um valoe de sessão!';
print_r($_SESSION);
echo '<hr>';
/* echo $_SESSION['y'] . '<br/>'; */

//variável que verifia se a autenticação foi realizada
$usuarios_autenticado = false;

//usuários do sistemas
$usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
);

foreach($usuarios_app as $i){
    if($i['email'] == $_POST['email'] && $i['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
    }
}

if($usuarios_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    header('Location: home.php'); // encaminha o usuario para a home.php
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}

//usuarios do form
$_POST['email'];  // $_POST recupera o valor dos inputs
$_POST['senha'];

?>