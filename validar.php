<?php

    if(!isset($_POST['entrar']))
    {
        header('location:index.php?msg=embranco');
    }

    else if(empty($_POST['usuario'] || $_POST['senha']))
    {
        header('location:index.php?msg=embranco');
    }



?>