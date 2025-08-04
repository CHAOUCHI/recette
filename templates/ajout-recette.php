<?php
if(isset($_POST["title"])){
    $title = $_POST["title"];
    var_dump($title);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajout-recette.css">
</head>
<body>
    <main>
        <h1>Ajout d'une recette</h1>
        <form action="" method="post">
            <input type="text" name="title">
            <button>Ajouter une recette</button>
        </form>
    </main>
</body>
</html>