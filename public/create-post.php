<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>
<body>

    <?php
    include_once("../app/database/connection.php");
    include_once("header.php");

    include("../app/protect.php");

    ProtegerPagina();
    ApenasAdmin();
    ?>

    <div class="container d-flex justify-content-center align-items-center text-center">

        <div class="row">
            <div class="borda mt-5 mb-5" style="height: 73vh;">
                <h3>Add post</h3>
                <form class="formpost d-flex flex-column align-items-center" action="../app/functions.php" method="POST">
                    <div>
                        <label for="title">Type a title: </label><br>
                        <textarea class="rounded p-3" type="text" name="title" rows="4" cols="50"></textarea>
                        <hr>
                        <label for="category">Select a category</label><br>
                        <select class="rounded" name="category">
                            <option value="Fashion">Fashion</option>
                            <option value="Food">Food</option>
                            <option value="Travel">Travel</option>
                            <option value="Technology">Technology</option>
                            <option value="Esport">Esport</option>
                            <option value="Health">Health</option>
                            <option value="Personal Finance">Personal Finance</option>
                            <option value="Business">Business</option>
                            <option value="Personal Development">Personal Development</option>
                            <option value="Entertainment">Entertainment</option>
                        </select>
                        <hr>
                        <label for="content">Type a content: </label><br>
                        <textarea class="rounded p-3" rows="17" cols="50" type="text" name="content"></textarea>
                    </div>
                    <hr>
                    <input style="width: 150px;height:40px;" class="btn btn-success" type="submit" name="create-post" value="Create Post">
                </form>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
</body>

</html>