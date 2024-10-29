<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="index.php?page=0" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <span class="logo">blogger</span>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php?page=0" class="nav-link px-2 link-dark">Página Inicial</a></li>
                <li><a href="#" class="nav-link px-2"></a></li>
                <li><a href="criarPost.php" class="nav-link px-2">Criar Post</a></li>
                <li><a href="#" class="nav-link px-2">FAQs</a></li>
                <li><a href="#" class="nav-link px-2">About</a></li>
            </ul>

            <div class="col-md-3 text-end">
                <button onclick="window.location.href='login.php'" type="submit" class="btn btn-outline-dark me-2">Login</button>
                <button onclick="window.location.href='registrar.php'" type="button" class="btn btn-dark">Registrar-se</button>
            </div>
        </header>
    </div>
</body>

</html>