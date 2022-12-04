<?php
    include_once "conexao.php";
    session_start();
    $autenticado = false;
    $_SESSION['autenticado'] = false;

    if(!isset($_POST['email'])){
        echo "Erro.";
    }else{
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $users =  mysqli_query($con,'SELECT * FROM usuario') ;

        foreach($users as $user){
            if($user['email'] == $email && $user['senha'] == $senha){
                $autenticado = true;
                $_SESSION['usuario'] = $user['nome'];
                $_SESSION['autenticado'] = true;
            }
        }


        if($autenticado){
            $_SESSION['autenticado'] = true;
            header('Location: ../home.php');
        }else{
            header('Location: ../index.php?erro=erro1');
        }

    }

?>