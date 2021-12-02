<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final - PHP</title>
</head>
<body>
    <h1>Projeto Final</h1>
    <h2>Utilize o formulário abaixo para entrar no sistema<h2>

        <form action="validar.php" method="post">
            <p>
                <label for="">Usuário: </label>
                <input type="text" name="usuario" id="" required>
            </p>

            <p>
                <label for="">Senha: </label>
                <input type="password" name="senha" id="">
            </p>

            <button type="submit" name="entrar">Entrar</button>

        </form>
</body>
</html>