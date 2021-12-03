<?php

include_once 'conn.php';

function salvar_curso($nome_curso, $anos_duracao, $area_atuacao)
{
    $conn = conectar();

    $sql = "INSERT INTO cursos_tb (nome_curso, anos_duracao, area_atuacao) 
    VALUES
    ('$nome_curso', $anos_duracao, '$area_atuacao')";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
    {
        return true;
    }
    else{
        return false;
    }
}

function buscar_cursos()
{
    $conn = conectar();

    $sql = "SELECT * FROM cursos_tb";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn) > 0)
    {
        return $result;
    }

    return null;
}

function exibir_cursos()
{
    $result = buscar_cursos();

    if ($result == null)
    {
        $retorno = '<h3>Não há livros para exibir<h3>';
    }
    else
    {
        $retorno = '';

        while($curso = mysqli_fetch_assoc($result))
        {
            $retorno .= "ID #: " . $curso['id_curso'] . "<br>";
            $retorno .= "Nome do curso: " . $curso['nome_curso'] . "<br>";
            $retorno .= "Anos de duração: " . $curso['anos_duracao'] . "<br>";
            $retorno .= "Área de atuação: " . $curso['area_atuacao'] . "<br>";
        }
    }

    return $retorno;
}

?>