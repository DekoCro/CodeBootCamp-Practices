<?php

require_once "BlogPost.php";

$all_posts = [];

$total_posts = 0;

$first_post = new Blog(1);

$first_post->id = 1;
$first_post->headline = 'The first post';
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';
$first_post->status = 'published';

$second_post = new Blog(2, 'The second post');
$second_post->publish();

var_dump($first_post);
var_dump($second_post);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>  
    <?php foreach($all_posts as $post) : ?>

    <div class="blog">
        <h1><?= $post->headline ?></h1>
        <p><?= $post->text ?></p>
        <h5><?= $post->added_at ?></h5>
    </div>

    <?php endforeach; ?>
    
</body>
</html>