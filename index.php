<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Projeto Final - PHP</title>
</head>
<body>
        <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="validar.php" method="post">
                            <h3 class="text-center text-info">Cadastro de Curso - Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Usuário</label><br>
                                <input type="text" name="usuario" id="ususuario" class="form-control" placeholder="Digite o seu nome de usuário">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Senha</label><br>
                                <input type="password" name="senha" id="password" class="form-control" placeholder="Digite sua senha">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="entrar" class="btn btn-info btn-md">Entrar</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['msg']))
	{
		include_once 'mensagens.php';
		echo validar_msg($_GET['msg']);
	}
	?>

</body>
</html>