<?php  
    include_once "templates/header.php";
?>

<main>
    <!-- Container para o título principal do blog -->
    <div id="title-container">
        <h1>BLOG CODAR</h1> <!-- Título principal do blog -->
        <p>O SEU BLOG DE PROGRAMAÇÃO</p> <!-- Subtítulo do blog -->
    </div>

    <!-- Container para os posts do blog -->
    <div id="posts-container"> <!-- Correção de digitação: 'post-container' ao invés de 'post-containeer' -->
        <?php foreach($posts as $post): ?> <!-- Início do loop que percorre cada post no array $posts -->
            <div class="post-box"> <!-- Container para um post individual -->
                <!-- Imagem do post -->
                <img src="<?= $BASE_URL?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                <h2 class="post-title"> <!-- Título do post -->
                    <!-- Link para a página do post individual, passando o ID do post na URL -->
                    <a href="<?= $BASE_URL?>/posts.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                </h2>
                <p class="post-description"><?= $post['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($post ['tags'] as $tag): ?> 
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?> 
                </div>
            </div>
        <?php endforeach; ?> <!-- Fim do loop que percorre cada post -->
    </div>
</main>

<?php  
    include_once "templates/footer.php" ;
?>