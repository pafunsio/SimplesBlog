<?php

    session_start();

    require_once 'db_connect.php';

    if(isset($_POST['logar'])){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if(strlen($email) > 0 && strlen($senha) > 0){
            $sql = "SELECT * FROM autores WHERE email = '$email' AND senha = '$senha' LIMIT 1;";
            $resultado = mysqli_query($connect, $sql);

            while($row = mysqli_fetch_assoc($resultado)){
                if ($row['id']){
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../painel.php");
                }
            }
        }
    }

?>