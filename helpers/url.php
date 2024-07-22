
    <?php
    // Cria uma variável $BASE_URL que contém a URL base do seu aplicativo web.
    // Isso permite que você gere links absolutos dentro do aplicativo, garantindo que eles funcionem
    /* corretamente independentemente do ambiente em que o aplicativo está sendo executado (desenvolvimento, 
    teste, produção).*/ 
    
    $BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
?>
