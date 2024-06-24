<?php

session_start();

//variável que verifia se a autenticação foi realizada
$usuarios_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuário');

//usuários do sistemas
$usuarios_app = array(
    array('id'=> 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id'=> 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1), 
    array('id'=> 3, 'email' => 'joser@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id'=> 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
);

foreach($usuarios_app as $i){
    if($i['email'] == $_POST['email'] && $i['senha'] == $_POST['senha']){
        $usuarios_autenticado = true;
        $usuario_id = $i['id'];
        $usuario_perfil_id = $i['perfil_id'];
    }
}

if($usuarios_autenticado){
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php'); // encaminha o usuario para a home.php
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');
}

//usuarios do form
$_POST['email'];  // $_POST recupera o valor dos inputs
$_POST['senha'];

?>