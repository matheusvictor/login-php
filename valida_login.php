<?php
    session_start();
    $usuario = $_POST['login'];
    $senha = $_POST['senha'];

    //banco de usuários
    $usuarios = [
        array('login'=>'marcos', 'senha'=>'123'),
        array('login'=>'diego', 'senha'=>'olamundo'),
        array('login'=>'lucas', 'senha'=>'1234'),
        array('login'=>'pedro', 'senha'=>'123')
    ];

    $autenticacao=false;

    //Verifica o usuário e senha em cada posição do vetor
    foreach($usuarios as $variavel){
        if($usuario == $variavel['login'] && $senha == $variavel['senha']){
            $autenticacao = true;
            break;
        }
    }

    if($autenticacao){
        $_SESSION['usuario'] = $usuario; //adiciona usuário autenticado a uma seção
        header('Location: home.php'); //redireciona o usuário para home.php
    }
    else{
        header('Location: index.php?erro-login=erro'); //redireciona para uma url personalizada no index
    }
?>