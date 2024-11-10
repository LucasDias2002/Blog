<?php
include_once("database/connection.php");
session_start();

if (isset($_POST['create-post'])) {
    $titulo = $_POST['title'];
    $categoria = $_POST['category'];
    $conteudo = $_POST['content'];

    $id = $_SESSION['usuario'];
    $sql = mysqli_query($conexao, "SELECT name FROM user WHERE user.id=$id");
    $sql_array = mysqli_fetch_assoc($sql);
    $autor = $sql_array['name'];


    $titulo = mysqli_real_escape_string($conexao, $titulo);
    $categoria = mysqli_real_escape_string($conexao, $categoria);
    $conteudo = mysqli_real_escape_string($conexao, $conteudo);

    mysqli_query($conexao, "INSERT INTO post (autor, title, category, content, date_post) VALUES ('$autor', '$titulo', '$categoria', '$conteudo', NOW())");

    header("Location: ../public/index.php");
}

if (isset($_POST['create-user'])) {
    if (isset($_POST['name'])) {
        if (strlen($_POST['email']) > 0) {
            if (strlen($_POST['password']) > 0) {
                if ($_POST['password'] == $_POST['password_confirm']) {

                    $nome = mysqli_real_escape_string($conexao, $_POST['name']);
                    $email = mysqli_real_escape_string($conexao, $_POST['email']);
                    $senha = mysqli_real_escape_string($conexao, password_hash($_POST['password'], PASSWORD_DEFAULT));

                    $consulta = mysqli_query($conexao, 'INSERT INTO user (name, email, password) VALUES ' . "('$nome', '$email', '$senha');");

                    echo "Cadastro feito com sucesso!";
                    header("Location: ../public/login.php");
                } else {
                    echo "Senhas não conferem!";
                    header("Location: ../public/create-user.php");
                }
            } else {
                echo "Digite uma senha!";
                header("Location: ../public/create-user.php");
            }
        } else {
            echo "Digite um email!";
            header("Location: ../public/create-user.php");
        }
    }
}

if (isset($_POST['update-post'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $id = $_GET['id'];

    $sql = mysqli_query($conexao, "UPDATE post SET title = '$title', category = '$category', content = '$content', date_update = CURRENT_TIMESTAMP WHERE id='$id'");
    var_dump($sql);
    var_dump($title, $category, $content, $id);

    header("Location: ../public/managerposts.php");
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];

    $sql = mysqli_query($conexao, "DELETE FROM post WHERE id=$id");

    header("Location: ../public/managerposts.php");
}

if (isset($_POST['logout'])) {
    session_start();
    session_unset();

    header("Location: ../public/login.php");
}