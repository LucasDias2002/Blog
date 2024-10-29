<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'blog';

$conexao = new mysqli($host, $usuario, $senha, $banco);

if($conexao->error){
    die("Falha ao conectar o banco de dados: $conexao->error");
}