<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Posts</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body class="">
    <div><?php include 'header.php'; ?></div>
    <div class="container borda mt-5">
        <h3 class="text-center">List Posts</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Date Update</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                include("../app/protect.php");

                ProtegerPagina();
                ApenasAdmin();

                include_once '../app/database/connection.php';

                $sql = mysqli_query($conexao, "SELECT id, autor, title, date_post, date_update FROM post ORDER BY date_post DESC");
                $qts = mysqli_num_rows($sql);

                if (mysqli_num_rows($sql) > 0) {
                    $cont = 0;

                    while ($qts > $cont) {
                        $cont++;
                        $post = mysqli_fetch_assoc($sql);
                        $titulo = $post['title'];
                        $autor = $post['autor'];
                        $id = $post['id'];
                        $data = date("d/m/Y", strtotime($post['date_post']));
                        $data_update = isset($post['date_update']) ? date("d/m/Y", strtotime($post['date_update'])): "";
                        echo "<tr>
                                <th scope='row'>$cont</th>
                                <td>$autor</td>
                                <td>$titulo</td>
                                <td>$data</td>
                                <td>$data_update</td>
                                <td><form method='POST' action='update-post.php'><button type='submit' class='btn btn-success me-2' name='update' value='$id'>Edit</button></form></td>
                                <td><form method='POST' action='../app/functions.php'><button type='submit' class='btn btn-danger me-2' name='delete' value='$id'>Delete</button></form></td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>