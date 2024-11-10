<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>

    <?php
    include_once("../app/database/connection.php");
    include_once("header.php");

    include("../app/protect.php");

    ProtegerPagina();
    ApenasAdmin();
    $id =  $_POST['update'];

    $sql = mysqli_query($conexao, "SELECT * FROM post WHERE post.id = $id");
    
    $sql = mysqli_fetch_assoc($sql);
    ?>

    <div class="container d-flex justify-content-center align-items-center text-center">

        <div class="row">
            <div class="borda mt-5 mb-5" style="height: 73vh;">
                <h3>Edit a post</h3>
                <form class="formpost d-flex flex-column align-items-center" action="../app/functions.php?id=<?=$id?>" method="POST">
                    <div>
                        <label for="title">Type new title: </label><br>
                        <textarea class="rounded p-3" type="text" name="title" rows="4" cols="50"><?= $sql['title'];?></textarea>
                        <hr>
                        <label for="category">Select a category</label><br>
                        <select class="rounded" name="category" >
                            <option value="Fashion" <?php echo ($sql['category'] == "Fashion") ? "selected" : ""; ?>>Fashion</option>
                            <option value="Food"  <?php echo ($sql['category'] == "Food") ? "selected" : ""; ?>>Food</option>
                            <option value="Travel" <?php echo ($sql['category'] == "Travel") ? "selected" : ""; ?>>Travel</option>
                            <option value="Technology" <?php echo ($sql['category'] == "Technology") ? "selected" : ""; ?>>Technology</option>
                            <option value="Esport" <?php echo ($sql['category'] == "Esport") ? "selected" : ""; ?>>Esport</option>
                            <option value="Health" <?php echo ($sql['category'] == "Health") ? "selected" : ""; ?>>Health</option>
                            <option value="Personal Finance" <?php echo ($sql['category'] == "Personal Finance") ? "selected" : ""; ?>>Personal Finance</option>
                            <option value="Business" <?php echo ($sql['category'] == "Business") ? "selected" : ""; ?>>Business</option>
                            <option value="Personal Development" <?php echo ($sql['category'] == "Personal Development") ? "selected" : ""; ?>>Personal Development</option>
                            <option value="Entertainment" <?php echo ($sql['category'] == "Entertainment") ? "selected" : ""; ?>>Entertainment</option>
                        </select>
                        <hr>
                        <label for="content">Type content: </label><br>
                        <textarea class="rounded p-3" rows="17" cols="50" type="text" name="content"><?= $sql['content'];?></textarea>
                    </div>
                    <hr>
                    <input style="width: 150px;height:40px;" class="btn btn-success" type="submit" name="update-post" value="Change Post">
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>