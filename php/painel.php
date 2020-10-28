<?php

    require_once "./actions/db_connect.php";

    session_start();

    if(isset($_SESSION['id'])){
        include_once "./includes/header.php";

        $id = $_SESSION['id'];

        $sql = "SELECT * FROM posts WHERE autor = $id;";
        $resultado = mysqli_query($connect, $sql);
?>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-responsive table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Conteudo</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($resultado)){
        ?>
            <tr>
                <td>
                    <?php echo $row['id'] ?>
                </td>
                <td>
                    <?php echo $row['titulo'] ?>
                </td>
                <td>
                    <?php echo $row['conteudo'] ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
            </div>
        </div>
    </div>
<?php
        include_once "./includes/footer.php";   
    } else {
        header("Location: ../index.php");
    }
?>