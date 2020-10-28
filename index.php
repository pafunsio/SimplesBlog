<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/estilo.css">

    <title>SimplesBlog - Login</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto pt-4 container-login">
                <h3 class="mb-4">Login</h3>
                <form method="POST" action="./php/actions/login.php">
                    <div class="form-group">
                        <label class="label-form" for="email">Email:</label>
                        <input class="form-control" type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="senha">Senha:</label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>
                    <button type="submit" name="logar" class="btn btn-primary mb-4"> Entrar </button>
                    <a href="./php/cadastro_autor.php" name="logar" class="btn btn-success mb-4"> Cadastrar </a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>