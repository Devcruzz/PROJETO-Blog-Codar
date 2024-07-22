<?php 
    // Inclui o arquivo que contém a função ou variável URL base
    include_once "helpers/url.php";

    // Inclui o arquivo que contém os dados dos posts
    include_once "data/posts.php";
    
    // Inclui o arquivo que contém os dados das categorias
    include_once "data/categories.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG PROGRAMADOR</title>
    <!-- ESTILOS CSS-->
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/styles.css">
    <!-- GOOGLE FONTES-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
        <!-- Link para a página inicial com o logo -->
        <a href="<?= $BASE_URL?>" id="logo">
            <img src="<?= $BASE_URL?>/img/logo.jpg" alt="blog codar">
        </a>
        <!-- Navegação -->
        <nav>
            <ul id="navbar">
                <!-- Itens do menu -->
                <li><a href="<?= $BASE_URL?>"class = "nav-link">Home</a></li>
                <li><a href="#"class = "nav-link">Categorias</a></li>
                <li><a href="#"class = "nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>/contato.php"class = "nav-link">Contato</a></li>
            </ul>
        </nav>
</header>
