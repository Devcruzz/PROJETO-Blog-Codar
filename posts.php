<?php  
    // Inclui o arquivo "header.php" uma vez. Este arquivo geralmente contém a parte inicial do HTML, como a tag <head> e o início do <body>.
    
    include_once "templates/header.php";

    // Verifica se o parâmetro 'id' foi passado via GET na URL.
    if(isset($_GET['id'])){
        // Armazena o valor do 'id' passado via GET na variável $postid.
        $postid = $_GET['id'];
        // Declara uma variável $currentpost para armazenar o post atual.
        $currentpost;
        
        // Loop através do array de posts.
        foreach($posts as $post) {
            // Se o 'id' do post atual no loop corresponder ao 'id' passado via GET...
            if($post['id'] == $postid){    
                // ...armazena o post atual na variável $currentpost.
                $currentpost = $post;
            }
        }
    }

?>;
    
<main id="post-container">
    <!-- Contêiner principal do post -->
    <div class="content-container">
        <!-- Contêiner para o conteúdo principal -->
        <h1 id="main-title"><?= $currentpost['title'] ?></h1>
        <!-- Exibe o título do post -->
        <p id="post-description"><?= $currentpost['description'] ?></p>
        <!-- Exibe a descrição do post -->
        <div class="img-container">
            <!-- Contêiner para a imagem do post -->
            <img src="<?= $BASE_URL?>/img/<?= $post['img'] ?>" alt="<?= $currentpost['title'] ?>">
            <!-- Exibe a imagem do post, pegando a URL base e o nome da imagem do array $post -->
        </div>
        <p class="post-content"><?= $currentpost['content'] ?> </p>
        <!-- Outro parágrafo de conteúdo do post com mais texto placeholder -->
    </div>
    <aside id="nav-container">
        <!-- Contêiner para a navegação lateral -->
        <h3 id="tags-title">Tags</h3>
        <!-- Título da seção de tags -->
            <ul id="tag-list">
                <!-- Lista de tags -->
                <?php foreach($currentpost['tags'] as $tag): ?> 
                    <li><a href="#"><?= $tag ?></a></li>
                    <!-- Exibe cada tag como um item de lista -->
                <?php endforeach; ?> 
            </ul>
        <h3 id="categories-title">Categorias</h3>
        <!-- Título da seção de categorias -->
            <ul id="categories-list">
                <!-- Lista de categorias -->
                <?php foreach($categories as $category): ?> 
                    <li><a href="#"><?= $category ?></a></li>
                    <!-- Exibe cada categoria como um item de lista -->
                <?php endforeach; ?> 
            </ul>
    </aside>
</main>

<?php  
    // Inclui o arquivo "footer.php" uma vez. Este arquivo geralmente contém o fechamento do HTML, como a tag </body> e </html>.
    
    include_once "templates/footer.php" ;
?>

