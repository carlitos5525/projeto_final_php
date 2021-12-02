<?php

    if(!isset($_POST['entrar']))
    {
        header('location:index.php?msg=embranco');
    }

    else if(empty($_POST['usuario'] || $_POST['senha']))
    {
        header('location:index.php?msg=embranco');
    }
    else
    {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        include_once 'database/usuario.dao.php';

        $result = buscar_usuario($usuario, $senha);

        if($result)
        {
            //iniciando a sessão
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;

            header('location:sistema/index.php');
        }
        else
        {
            header('location:index.php?msg=usuario_invalido');
        }


    }



?>