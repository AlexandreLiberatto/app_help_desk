<?php

session_start(); //sempre usar para trabalhar com sessão

session_destroy(); // destroi as variaveis na memoria do servidor daquela sessão

header('Location: index.php'); //redireciona o usuário para a página index.php


//remover indices do array de sessão
// unset()

//destruir a varável de sessão
//session_destroy()

?>