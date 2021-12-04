<?php include_once 'lock.php';

if (!isset($_POST['salvar']) || empty($_POST['nome_curso']) || empty($_POST['anos_duracao']) || empty($_POST['area_atuacao']))
{
	header('location:index.php?msg=edtembranco');
}
else
{
	$id_curso = $_POST['id_curso'];
	$nome_curso = $_POST['nome_curso'];
	$anos_duracao = $_POST['anos_duracao'];
	$area_atuacao = $_POST['area_atuacao'];

	include_once '../database/curso.dao.php';

	$result = editar_curso($id_curso, $nome_curso, $anos_duracao, $area_atuacao);

	if ($result)
	{
		header('location:index.php?msg=editado');
	}
	else
	{
		header('location:index.php?msg=erroeditar');
	}
}


?>