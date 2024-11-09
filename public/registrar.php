<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>
    <?php
    include_once("cabecalho.php");
    ?>

    <div class="container login">
        <form class="formlogin" method="POST">
            <div class="formreg borda d-flex gap-3 flex-column">
                <div class="imglogin"><img class="mb-4" src="../public/assets/img/favicon/android-chrome-512x512.png" alt="" width="100" height="100"></div>
                <h1 class="h3 mb-3 fw-normal">Registrar-se:</h1>
                <div class="form-floating">
                    <input type="text" name="nome" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Nome</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Senha</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="senha_confirme" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirmar senha</label>
                </div>
                <input class="btn btn-dark w-100 py-2" type="submit" value="Registrar-se">
                <p class="mensagem">
                    <?php
                    include_once("../app/database/db.php");

                    if (isset($_POST['nome'])) {
                        if (strlen($_POST['email']) > 0) {
                            if (strlen($_POST['senha']) > 0) {
                                if ($_POST['senha'] == $_POST['senha_confirme']) {

                                    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
                                    $email = mysqli_real_escape_string($conexao, $_POST['email']);
                                    $senha = mysqli_real_escape_string($conexao, password_hash($_POST['senha'], PASSWORD_DEFAULT));

                                    $consulta = mysqli_query($conexao, "INSERT INTO usuario (nome, email, senha) VALUE ('$nome', '$email', '$senha');");

                                    echo "Cadastro feito com sucesso!";
                                    header("Location: index.php");

                                } else {
                                    echo "Senhas não conferem!";
                                }
                            }
                            else{
                            echo "Digite uma senha!";}
                        }
                        else{
                            echo "Digite um email!";
                        }
                    }
                    ?>
                </p>
                <p class="mt-5 mb-3 text-body-secondary">© 2024</p>
        </form>
    </div>
    </div>

    <?php include_once("footer.php"); ?>

</body>

</html>