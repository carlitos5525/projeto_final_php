<?php

function buscar_usuario($usuario, $senha)
{
    //estabelecendo conexão
    include_once 'conn.php';

    $conn = conectar();

    //buscando no BD
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    //executando comando
    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}


?>