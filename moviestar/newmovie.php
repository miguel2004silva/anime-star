<?php
require_once("templates/header.php");
require_once("models/User.php");
require_once("dao/UserDAO.php");

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);

?>
<div id="main-container" class="container-fluid">
    <div class="offset-md-4 col-md-4 new-movie-container">
        <h1 class="page-title">Adicionar Anime</h1>
        <p class="page-description">Adicione sua crítica e compartilhe conosco!</p>
        <form action="<?= $BASE_URL ?>movie_process.php" id="add-movie-form" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Digite o título do seu anime">
            </div>
            <div class="form-group">
                <label for="image">Imagem:</label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="lenght">Duração:</label>
                <input type="text" class="form-control" id="lenght" name="lenght" placeholder="Digite a duração do anime">
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option value="Ação">Ação</option>
                    <option value="Comédia">Comédia</option>
                    <option value="Drama">Drama</option>
                    <option value="Ficção Científica">Ficção Científica</option>
                    <option value="Documentário">Documentário</option>
                    <option value="Romance">Romance</option>
                </select>
            </div>
            <div class="form-group">
                <label for="trailer">Trailer:</label>
                <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Insira o link do trailer">
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" rows="5" class="form-control" placeholder="Descreva o anime..."></textarea>
            </div>
            <input type="submit" class="btn card-btn" value="Adicionar Anime">
        </form>
    </div>
</div>
<?php
require_once("templates/footer.php");
?>