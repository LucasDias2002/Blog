    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogger</title>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
    </head>

    <body>
        <div><?php include 'header.php'; ?></div>
        <div class="container cards">
            <?php
            include("../app/protect.php");

            ProtegerPagina();
            include_once '../app/database/connection.php';

            $pagina = isset($_GET['page']) ? $_GET['page'] : 0;

            $inicio = $pagina * 12;

            //Puxei as postagens do banco de dados
            $postagens = mysqli_query($conexao, "SELECT * FROM post ORDER BY date_post DESC LIMIT $inicio, 12;");

            //Puxando a quantidade de postagens
            $qtspaginas = mysqli_query($conexao, "SELECT COUNT(id) FROM post;");

            //Tranformando em um array associativo
            $qts = mysqli_fetch_assoc($qtspaginas);

            //Dividindo pela quantidade de postagens que aparece por pagina
            $qts = $qts['COUNT(id)'] / 12;

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
                    $titulo = substr($postagem['title'],0, 70);
                    $categoria = strtoupper($postagem['category']);
                    $conteudo = substr($postagem['content'], 0, 150) . "...";
                    $data = date("d/m/Y", strtotime($postagem['date_post']));
                    $id = $postagem['id'];


                    if ($numPostagem == 1 || $numPostagem == 7) {
                        print "
                            <div class='$class d-flex flex-column'>
                                <div class='header-card'>
                                    <p class='autor-data'>by <span class='autor'>$autor</span> on <span class='data'>$data</span></p>
                                </div>
                                <div class='card-body justify-content-evenly d-flex flex-column'>
                                    <h5><a class='card-title mt-3 mb-3 text-decoration-none' href='post.php?post=$id'>$titulo</a></h5>
                                    <div><span class='categoria p-2'>$categoria</span></div>
                                    <p class='fs-3 text fw-light lh-lg'>$conteudo</p>
                                </div>
                            </div>";
                        $numPostagem++;
                    } else {
                        print "
                            <div class='$class borda d-flex flex-column'>
                                <p class='titulo'><span class='autor'><span class='autor-data'>by </span> $autor</span></p>
                                <div class='card-body justify-content-around d-flex flex-column'>
                                <h5><a class='card-title2 text-decoration-none text-dark' href='post.php?post=$id''>$titulo</a></h5>
                                <div><span class='categoria p-2'>$categoria</span></div>
                            </div>
                        </div>";
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
            while ($cont <= $qts) {
                print "<a class='paginas' href='?page=$cont'>$cont</a><br>";
                $cont++;
            }
            ?>
        </div>
        <div><?php include 'footer.php'; ?></div>
    </body>

    </html>