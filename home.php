<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        echo "Olá, ".$_SESSION['usuario'];
    } else{
        header('Location: index.php?erro-login=erro');
    }
    unset($_SESSION['usuario']);
?>