<?php

use App\Models\Post;

$post = new Post();
$posts = $post->all('posts');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<header>
    <a href="/">Главная страница</a>
    <a href="/posts">Посты</a>
    <a href="/posts/create">Добавить пост</a>
</header>
<body>

<?php
foreach ($posts as $post) {
    ?>
    <br>
    <div style="border: 1px solid; text-align: center">
        <h1><?php echo $post['1'] ?></h1>
        <p><?php echo $post['2'] ?></p>
    </div>
    <br>
    <?php
}
?>
</body>
</html>