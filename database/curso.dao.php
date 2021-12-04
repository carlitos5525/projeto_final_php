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
        $retorno = '<div class="col-9">';
		$retorno .= '<table class="table table-hover">';
		// montar a primeira linha da tablea
		$retorno .= '<tr>';
		$retorno .= '<th>ID #</th>'; // coluna de cabeçalho = th = table header
		$retorno .= '<th>Nome do curso</th>';
		$retorno .= '<th>Anos de Duração</th>';
		$retorno .= '<th>Área de atuação</th>';
		$retorno .= '<th>Deletar</th>';
		$retorno .= '<th>Editar</th>';
		$retorno .= '</tr>';

        while($curso = mysqli_fetch_assoc($result))
        {
            $retorno .= '<tr>';
			// coluna simples da tabela = td = table data
			$retorno .= "<td>" . $curso['id_curso'] . "</td>";
			$retorno .= "<td>" . $curso['nome_curso']   . "</td>";
			$retorno .= "<td>" . $curso['anos_duracao']    . "</td>";
			$retorno .= "<td>" . $curso['area_atuacao']  . "</td>";
			$retorno .= "<td>" . link_deletar($curso['id_curso']) . "</td>";
			$retorno .= "<td>" . link_editar($curso['id_curso'])  . "</td>";
			$retorno .= '</tr>'; // fim da linha da tabela
        }

        $retorno .= '</table>';
		$retorno .= '</div>';
    }

    return $retorno;
}

function link_deletar($id_curso)
{
    $link = '<a href="deletar.php?id_curso='.$id_curso.'" 
    onclick="return confirm(\'Tem certeza que deseja excluir esse livro?\')" class="btn btn-danger" >Deletar<a/>';

    return $link;
    
}

function deletar_curso($id_curso)
{
    $conn = conectar();

    $sql = "DELETE FROM cursos_tb WHERE id_curso = $id_curso";

    $result = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}


function link_editar($id_curso)
{
    $link = '<a href="editar.php?id_curso='.$id_curso.'" class="btn btn-warning">Editar</a>';
	return $link;
}


function buscar_curso($id_curso)
{
	$conn = conectar();

	$sql = "SELECT * FROM cursos_tb WHERE id_curso = $id_curso";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return $result;
	}

	return null;
}

function editar_curso($id_curso, $nome_curso, $anos_duracao, $area_atuacao)
{
	$conn = conectar();

	$sql = "UPDATE cursos_tb SET nome_curso = '$nome_curso', anos_duracao = $anos_duracao, area_atuacao = '$area_atuacao' 
	WHERE id_curso = $id_curso";

	$result = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) > 0)
	{
		return true;
	}

	return false;
}
?>