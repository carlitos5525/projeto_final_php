
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

	<?php include_once 'menu.php' ?>

	<br>
	<div class="container">
		<div class="   col-md-6 offset-md-3">
			<h3>Editar Dados do Curso:</h3>
	</div>
		<form action="editado.php" method="post">
		<div class="form-group">
			<div class="   col-md-6 offset-md-3">
			<label for="nome_curso">Nome do Curso</label>
			<input type="text" name="nome_curso" required value="<?= $curso['nome_curso'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome do curso">
			</div>
		</div>
		<div class="form-group">
			<div class="   col-md-6 offset-md-3">
			<label for="anos_duracao">Anos de duração do curso</label>
			<input type="number" name="anos_duracao" required value="<?= $curso['anos_duracao'] ?>" max="10" min="1" class="form-control" id="exampleInputPassword1">
			</div>
		</div>
		<div class="form-group">
			<div class="   col-md-6 offset-md-3">
			<label for="area_atuacao">Selecione a área de atuação</label>
			<select class="form-select" required value="<?= $curso['area_atuacao'] ?>" name="area_atuacao" id="exampleFormControlSelect1">
			<option selected required value="<?= $curso['area_atuacao'] ?>"></option>
			<option>Humanas</option>
			<option>Exatas</option>
			<option>Biológicas</option>
			</select>
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-md-6 offset-md-3">
				<button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
				<a href="index.php" class="btn btn-danger btn-sm">Cancelar Edição</a>
			</div>
		</div>

		<input type="hidden" name="id_curso" value="<?= $curso['id_curso'] ?>">
		</form>

    </div>

</body>
</html>