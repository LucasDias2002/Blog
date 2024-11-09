<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>
    <div><?php include 'cabecalho.php'; ?></div>
    <div class="container">
        <div class="m-5">
            <?php
            include("../app/protect.php");
            ProtegerPagina();

            if (!isset($_GET['post'])) {
                echo "Não existe postagem!";
            } else {
                include_once '../app/database/db.php';
                $id = $_GET['post'];
                $consulta = mysqli_query($conexao, "SELECT * FROM postagem WHERE id = $id");

                $sql = mysqli_fetch_assoc($consulta);

                $titulo = $sql['titulo'];
                $conteudo = $sql['conteudo'];
                $autor = $sql['autor'];
                $data =  date("d/m/Y", strtotime($sql['data_postagem']));
                echo "
                        <div class='row justify-content-center'> 
                       
                             <div class='col-xl-8'>
                                <h5 class='card-title mt-3 mb-2 lh-base'>$titulo</h5>
                                 <p class='autor-data text-end mb-5'>by <span class='autor'>$autor</span> on <span class='data'>$data</span></p>
                                <p class='fs-3 text lh-lg'>$conteudo</p>
                            </div>
                        </div>
                    ";
            }
            ?>
        </div>
    </div>
    <?php
    include_once("footer.php");
    ?>
</body>

</html>