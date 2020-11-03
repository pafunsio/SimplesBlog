<?php
    session_start();

    if(isset($_SESSION['id']) && $_SESSION['id'] <> ""){
        include_once "./includes/header.php";
?>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto pt-4 container-login">
                <h3 class="mb-4">Cadastro de Posts</h3>
                <form method="POST" action="./actions/cadastrar_posts.php">
                    <div class="form-group">
                        <label class="label-form" for="titulo">Titulo:</label>
                        <input class="form-control" type="text" name="titulo" id="titulo">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="conteudo">Conteudo:</label>
                        <textarea class="form-control" name="conteudo" id="conteudo"></textarea>
                    </div>
                    <button type="submit" name="cadastrar" class="btn btn-success mb-4" id="cadastrar-autores"> Cadastrar </button>
                </form>
            </div>
        </div>
    </div>
<?php
        include_once "./includes/footer.php";   
    } else {
        header("Location: ../index.php");
    }
?>