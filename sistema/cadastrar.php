<?php

if(!isset($_POST['salvar']) || empty($_POST['nome_curso']) || empty($_POST['anos_duracao']) || empty($_POST['area_atuacao']))
{
    header('location:index.php?msg=cadastro_em_branco');
}
else
{
    $nome_curso = $_POST['nome_curso'];
    $anos_duracao = $_POST['anos_duracao'];
    $area_atuacao = $_POST['area_atuacao'];

    include_once '../database/curso.dao.php';

    $result = salvar_curso($nome_curso, $anos_duracao, $area_atuacao);

    if($result)
    {
        header('location:index.php?msg=cadastrado');
    }
    else
    {
        header('location:index.php?msg=erro_cadastro');
    }
}

?>