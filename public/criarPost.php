<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Criar postagem</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.ico">
</head>

<body>

    <?php
    include_once("../app/database/db.php");
    include_once("cabecalho.php");

    include("../app/protect.php");

    ProtegerPagina();

    if (isset($_POST['titulo'])) {
        $titulo = $_POST['titulo'];
        $categoria = $_POST['categoria'];
        $conteudo = $_POST['conteudo'];

        $id = $_SESSION['usuario'];
        $sql = mysqli_query($conexao, "SELECT nome FROM usuario WHERE usuario.id=$id");
        $sql_array = mysqli_fetch_assoc($sql);
        $autor = $sql_array['nome'];


        $titulo = mysqli_real_escape_string($conexao, $titulo);
        $categoria = mysqli_real_escape_string($conexao, $categoria);
        $conteudo = mysqli_real_escape_string($conexao, $conteudo);

        mysqli_query($conexao, "INSERT INTO postagem (autor, titulo, categoria, conteudo, data_postagem) VALUES ('$autor', '$titulo', '$categoria', '$conteudo', NOW())");
    }

    ?>

    <div class="container d-flex justify-content-center align-items-center text-center">
        
        <div class="post-box borda mt-5 mb-5" style="height: 57vh;">
            <h3>Adicionar uma postagem</h3>
            <form class="formpost d-flex flex-column  align-items-center" method="POST">
                <div>
                    <label for="titulo">Digite um título: </label><br>
                    <textarea type="text" name="titulo" style="height: 50px;width: 600px; " rows="100" ></textarea>
                    <hr>
                    <label for="categoria">Selecione uma categoria</label><br>
                    <select name="categoria">
                        <option value="MODA">Moda</option>
                        <option value="CULINÁRIA">Culinária</option>
                        <option value="VIAGENS">Viagens</option>
                        <option value="TECNOLOGIA">Tecnologia</option>
                        <option value="ESPORTE">Esporte</option>
                        <option value="BELEZA">Beleza</option>
                        <option value="SAÚDE e BEM-ESTAR">Saúde e Bem-estar</option>
                        <option value="FINANÇAS PESSOAIS">Finanças Pessoais</option>
                        <option value="MARKETING E NEGÓCIOS">Marketing e Negócios</option>
                        <option value="DESENVOLVIMENTO PESSOAL">Desenvolvimento Pessoal</option>
                        <option value="ENTRETENIMENTO">Entretenimento</option>
                    </select>
                    <hr>
                    <label for="conteudo">Digite o conteúdo: </label><br>
                    <input style="height: 200px;width: 600px" type="text" name="conteudo">
                </div>
                <hr>
                <input style="width: 150px;height:40px;" class="btn btn-dark" type="submit" value="Criar Postagem">
            </form>
        </div>
    </div>
    
    <?php
    include_once("footer.php");
    ?>
</body>

</html>