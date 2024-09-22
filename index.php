<?php 
DEFINE("SERVER","https://jaimefranko.com/simpleemojijs/");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Emoji JS</title>
    <link href="<?php echo SERVER;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SERVER;?>css/simpleemoji.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3>Selector de Emojis</h3>
            <input type="text" id="emoji-input" class="form-control" placeholder="Escribe aquí...">
            <button class="btn btn-primary mt-2" id="emoji-btn">Seleccionar Emoji</button>
            
            <div class="emoji-picker mt-2" id="emoji-picker">
                <input type="text" id="emoji-search" class="form-control mb-2" placeholder="Buscar emojis...">
                <div class="emoji-categories">
                    <button class="category-btn active" data-category="smileys">😊</button>
                    <button class="category-btn" data-category="body">👋</button>
                    <button class="category-btn" data-category="people">👨‍</button>
                    <button class="category-btn" data-category="nature">🌳</button>
                    <button class="category-btn" data-category="animals">🐵</button>
                    <button class="category-btn" data-category="food">🍔</button>
                    <button class="category-btn" data-category="activities">⚽</button>
                </div>
                <div class="emoji-list">
                    <!-- Aquí se llenarán los emojis dinámicamente -->
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo SERVER;?>js/jquery-3.5.1.min.js"></script>
<script src="<?php echo SERVER;?>js/bootstrap.min.js"></script>
<script src="<?php echo SERVER;?>js/simpleemoji.js"></script>
</html>