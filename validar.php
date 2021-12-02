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
            echo "Deu boa";
        }
        else
        {
            echo "Deu ruim";
        }


    }



?>