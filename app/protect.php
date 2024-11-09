<?php
if (!function_exists("ProgeterPagina")) {

    function ProtegerPagina()
    {
        if (!isset($_SESSION))
            session_start();

        if (!isset($_SESSION['usuario']) || !is_numeric($_SESSION['usuario']))
            header("Location: ../public/login.php");
    }
}
if (!function_exists("ApenasAdmin")) {

    function ApenasAdmin()
    {
        if (!isset($_SESSION))
            session_start();

        if (!isset($_SESSION['usuario']) || !is_numeric($_SESSION['usuario']) || $_SESSION <> 1)
            header("Location: ../public/index.php");
    }
}
