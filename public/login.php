<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
    <title>Login</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
</head>

<body>
    <div><?php include 'header.php'; ?></div>

    <div class="container login">
        <form class="borda formlogin" method="POST">
            <div class="imglogin"><img class="mb-4" src="../public/assets/img/favicon/android-chrome-512x512.png" alt="" width="100" height="100"></div>
            <h1 class="h3 mb-3 fw-normal">Efetuar login:</h1>

            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <div class="d-flex gap-2">
                <a class="btn btn-dark w-100 py-2" href="registrar.php">Register</a>
                <button class="btn btn-success w-100 py-2" type="submit">Sign in</button>
            </div>

            <p class="mensangem">
                <?php
                include_once("../app/database/connection.php");

                if (!isset($_SESSION))
                    session_start();

                if (isset($_POST['email'])) {
                    if (strlen($_POST['password']) > 0 && strlen($_POST['email'] > 0)) {

                        $email = mysqli_real_escape_string($conexao, $_POST['email']);
                        $senha = mysqli_real_escape_string($conexao, $_POST['password']);

                        $query = "SELECT * FROM user WHERE user.email = '$email'";

                        $consulta = mysqli_query($conexao, $query);

                        if ($consulta->num_rows > 0) {
                            $usuario = mysqli_fetch_assoc($consulta);

                            $_SESSION['usuario'] = $usuario['id'];

                            if ($usuario <> null && password_verify($senha, $usuario['password'])) {
                                echo "Login successfully!";
                                header("Location: index.php");
                            } else
                                echo "Email or password no match!";
                        } else {
                            echo "Email or password no match!";
                        }
                    }
                }
                ?></p>

            <p class="mt-5 mb-3 text-body-secondary">© 2024</p>
        </form>
    </div>
    <div><?php include 'footer.php'; ?></div>
</body>

</html>