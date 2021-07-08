<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
</head>
<body>
    <?php
        include __DIR__ . "/classes/Movies.php";
    ?>
    <main class="container">
            <div class="movie">
                <h2><?= $theWolf->title; ?></h2>
                <ul style="list-style-type: none">
                    <li>Regia: <?= $theWolf->director; ?></li>
                    <li>Attori: <?= $theWolf->cast; ?></li>
                    <li>Genere: <?= $theWolf->genre; ?></li>
                    <li>Anno: <?= $theWolf->year; ?></li>
                </ul>
                <p style="width: 50%"><?= $theWolf->plot; ?></p>
                <small>Età: <?= $theWolf->getRating(); ?></small>
            </div>

            <hr>

            <div class="movie">
                <h2><?= $apocalypto->title; ?></h2>
                <ul style="list-style-type: none">
                    <li>Regia: <?= $apocalypto->director; ?></li>
                    <li>Attori: <?= $apocalypto->cast; ?></li>
                    <li>Genere: <?= $apocalypto->genre; ?></li>
                    <li>Anno: <?= $apocalypto->year; ?></li>
                </ul>
                <p style="width: 50%"><?= $apocalypto->plot; ?></p>
                <small>Età: <?= $apocalypto->getRating(); ?></small>
            </div>

            <hr>

            <div class="movie">
                <h2><?= $mohicani->title; ?></h2>
                <ul style="list-style-type: none">
                    <li>Regia: <?= $mohicani->director; ?></li>
                    <li>Attori: <?= $mohicani->cast; ?></li>
                    <li>Genere: <?= $mohicani->genre; ?></li>
                    <li>Anno: <?= $mohicani->year; ?></li>
                </ul>
                <p style="width: 50%"><?= $mohicani->plot; ?></p>
                <small>Età: <?= $mohicani->getRating(); ?></small>
            </div>
        </main>
    
</body>
</html>