<?php include_once 'lock.php'; ?>
<?php include_once '../database/curso.dao.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Projeto Final - Area Restrita</title>
</head>
<body>

    <?php include_once 'menu.php'?>

    <?php  

	if (isset($_GET['msg']))
	{
		include_once '../mensagens.php';
		echo validar_msg($_GET['msg']);
	}
	?>
    <div class="container">
                <form action="cadastrar.php" method="post">
                <div class="form-group">
                    <div class="   col-md-6 offset-md-3">
                    <label for="nome_curso">Nome do Curso</label>
                    <input type="text" name="nome_curso" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome do curso">
                    </div>
                </div>
                <div class="form-group">
                    <div class="   col-md-2 offset-md-3">
                    <label for="anos_duracao">Anos de duração do curso</label>
                    <input type="number" name="anos_duracao" max="10" min="1" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="form-group">
                    <div class="   col-md-6 offset-md-3">
                    <label for="area_atuacao">Área de atuação</label>
                    <select class="form-select" name="area_atuacao" id="exampleFormControlSelect1">
                    <option selected>Selecione a área de atuação</option>
                    <option>Humanas</option>
                    <option>Exatas</option>
                    <option>Biológicas</option>
                    </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" name="salvar" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                </form>
    </div>
    
    <div class="container">
        <br>
        <div class="   col-md-8 offset-md-3">
            <h2>Livros Cadastrados<h2>
        </div>
        <br>
        <div class="   col-md-8 offset-md-3">
            <?php
                echo exibir_cursos();
            ?>
        </div>
        
    </div>
    
    
</body>
</html>