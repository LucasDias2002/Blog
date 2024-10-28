    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>yourblog</title>
        <link rel="stylesheet" href="../public/assets/css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
    </head>

    <body>
        <div><?php include 'cabecalho.php'; ?></div>
        <div class="container">
            <div class="cards">
                <?php
                include_once '../app/database/db.php';

                //
                $pagina = isset($_GET['page']) ? $_GET['page'] : 0;

                $inicio = $pagina * 12;

                //Puxei as postagens do banco de dados
                $postagens = mysqli_query($conexao, "SELECT * FROM postagem ORDER BY data DESC LIMIT $inicio, 12;");
                $qtspaginas = $postagens->num_rows / 12;

                //Verifica o número de postagens é maior que 0
                if (mysqli_num_rows($postagens) > 0) {
                    $numPostagem = 1;
                    $cont = 0;
                    //Puxa uma linha e retorna como um array associativo
                    while (mysqli_num_rows($postagens) > $cont) {
                        $cont++;
                        $postagem = mysqli_fetch_assoc($postagens);
                        $class = 'banner' . $numPostagem;
                        $autor = $postagem['autor'];
                        $titulo = $postagem['titulo'];
                        $categoria = $postagem['categoria'];
                        $conteudo = $postagem['conteudo'];
                        $data = date("d/m/Y" , strtotime($postagem['data']));


                        if ($numPostagem == 1 || $numPostagem == 7) {
                            print "
                    <div class='$class'>
                        <div class='header-card'>
                            <p class='autor-data'>by <span class='autor'>$autor</span> on <span class='data'>$data</span></p>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title mt-3 mb-3'>$titulo</h5>
                            <span class='categoria'>$categoria</span>
                            <p class='card-text'>$conteudo.</p>
                        </div>
                    </div>";
                            $numPostagem++;
                        } else {
                            echo "
                    <div class='$class borda'>
                        <p class='titulo'><span class='autor'>$autor</span></p>
                        <div class='card-body'>
                        <h5 class='card-title2'>$titulo</h5>
                        <span class='categoria'>$categoria</span>
                    </div>
                </div>";
                            if ($numPostagem == 12)
                                $numPostagem = 0;
                            $numPostagem++;
                        }
                    }
                } else {
                    echo "Nenhuma postagens encontrada!";
                }
                ?>
            </div>
            <div class="pags">
                <?php
                $cont = 0;
                while ($cont <= $qtspaginas) {
                    print "<a class='paginas' href='?page=$cont'>$cont</a><br>";
                    $cont++;
                }
                ?>
            </div>
            <div><?php include 'footer.php'; ?></div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </html>