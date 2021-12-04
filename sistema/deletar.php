<?php  include_once 'lock.php';

if (!isset($_GET['id_curso']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	$id_curso = $_GET['id_curso'];

	include_once '../database/curso.dao.php';

	$result = deletar_curso($id_curso);

	if ($result)
	{
		header('location:index.php?msg=cursodeletado');
	}
	else
	{
		header('location:index.php?msg=errodeletar');
	}
}


?>