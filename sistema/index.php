<?php include_once 'lock.php'; ?>
<?php include_once '../database/curso.dao.php' ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final - Area Restrita</title>
</head>
<body>

    <h1>Cadastro de Cursos - Área Restrita</h1>

    <p>
        <a href="logout.php">Sair do Sistema<a>
    <p>

    <h3>Utilize o form abaixo para cadastrar<h3>

    <form action="cadastrar.php" method="post">
        <p>
            <label for="nome_curso">Nome do Curso</label>
            <input type="text" name="nome_curso" id="">
        </p>

        <p>
            <label for="anos_duracao">Anos de duração</label>
            <input type="number" name="anos_duracao" max="10" min="1" id="">
        </p>

        <p>
            <label for="area_atuacao">Área de atuação</label>
            <input type="text" name="area_atuacao" id="">
        </p>

        <p>
            <button type="submit" name="salvar">Salvar</button>

        </p>

    </form>

    <h2>Livros Cadastrado<h2>
    
    <?php
        echo exibir_cursos();
    ?>

    
</body>
</html>