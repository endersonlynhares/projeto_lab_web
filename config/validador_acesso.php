<?php
    session_start();
    if(!$_SESSION['autenticado']){
        header('Location: index.php?login=erro-autenticacao');
    }
?>