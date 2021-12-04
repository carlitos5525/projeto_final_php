
<?php include_once 'lock.php';
include_once '../database/curso.dao.php'; 

if (!isset($_GET['id_curso']))
{
	header('location:index.php?msg=idinvalido');
}
else
{
	// tentar buscar o livro especificado no id
	$result = buscar_curso($_GET['id_curso']);

	if($result == null)
	{
		header('location:index.php?msg=idinvalido');
	}
	else
	{
		// converter o retorno (result) em um array associativo
		$curso = mysqli_fetch_assoc($result);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Projeto Final - Editar Curso</title>
</head>
<body class="container-fluid">

	<h1>Editar Curso</h1>

	<p>
		<a href="index.php" class="btn btn-primary btn-sm">Cancelar Edição</a>
	</p>

	<h3>Editar Dados do Curso:</h3>

	<div class="col-5">
		<form action="editado.php" method="post">
			
			<p>
				<label class="form-label">Nome do Curso</label><br>
				<input type="text" name="nome_curso" required value="<?= $curso['nome_curso'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Anos de duração</label><br>
				<input type="number" name="anos_duracao" required value="<?= $curso['anos_duracao'] ?>" class="form-control">
			</p>

			<p>
				<label class="form-label">Área de atuação</label><br>
				<input type="text" name="area_atuacao" required value="<?= $curso['area_atuacao'] ?>" class="form-control">
			</p>

			<p>
				<button type="submit" name="salvar" class="btn btn-outline-primary">Salvar Alterações</button>
			</p>

			<input type="hidden" name="id_curso" value="<?= $curso['id_curso'] ?>">

		</form>
	</div>

</body>
</html>