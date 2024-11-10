<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar-se</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>
    <?= include_once("header.php"); ?>
    <div class="container login">
        <form class="formlogin" method="POST" action="../app/functions.php">
            <div class="formreg borda d-flex gap-3 flex-column">

                <div class="imglogin"><img class="mb-4" src="../public/assets/img/favicon/android-chrome-512x512.png" alt="" width="100" height="100"></div>
                <h1 class="h3 mb-3 fw-normal">Register:</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Name</label>
                </div>

                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-floating">
                    <input type="password" name="password_confirm" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm password</label>
                </div>

                <input name="create-user" class="btn btn-dark w-100 py-2" type="submit" value="Register">
                <p class="message">
                </p>
                <p class="mt-5 mb-3 text-body-secondary">© 2024</p>
        </form>
    </div>
    </div>

</body>

</html>