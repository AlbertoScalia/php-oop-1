<?php

include_once __DIR__ . '/db.php';

var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <div class="container">
            <h1 class="py-4">My OOP Movies</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Language</th>
                        <th scope="col">Genres</th>
                        <th scope="col">Rated R</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($movies as $movie) : ?>
                    <tr>
                        <td><?= $movie->title?></td>
                        <td><?= $movie->language?></td>
                        <td><?= $movie->genre->name?></td>
                        <?php if ($movie->isRatedR === true) :?>
                            <td>Yes</td>
                        <?php else : ?>
                        <td>No</td>
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>