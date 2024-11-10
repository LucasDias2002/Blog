<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php?page=0" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <span class="logo">blogger</span>
                </a>
            </div>
            <div>
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                    <?php
                    if (!isset($_SESSION))
                        session_start();

                    if (isset($_SESSION['usuario'])) {
                        echo '<li><a href="index.php?page=0" class="nav-link px-2 link-dark">Home</a></li>';

                        if ($_SESSION['usuario'] == 1)
                            echo '<li><a href="create-post.php" class="nav-link px-2 link-dark">New Post</a></li>
                              <li><a href="managerposts.php" class="nav-link px-2 link-dark">Manager Posts</a></li>';
                    }

                    ?>
                </ul>
            </div>
            <div class="col-md-3 text-end">
                <form class="d-inline" action="../app/functions.php" method="POST"><button name="logout" type="submit" class="btn btn-<?php if (isset($_SESSION['usuario'])) echo "success"; else echo "danger"; ?> me-2"><?= !isset($_SESSION['usuario']) ? "Sign in" : "Sign out";?></button></form>
                <button onclick="window.location.href='create-user.php'" type="button" class="btn btn-dark">Register</button>
            </div>
        </header>
    </div>
</body>

</html>