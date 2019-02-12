<?php

require_once "BlogPost.php";

$all_posts = [];
$total_posts = 0;

$first_post = new BlogPost(1, "Title");

$first_post->id = 1;
$first_post->text = 'I have decided to write my own blog. This is my first post, beautiful in it\'s simplicity.';

$first_post->user_id = 1;
$first_post->status = 'published';

$second_post = new BlogPost(1, "Second Title");

$second_post->publish();

var_dump($first_post);
var_dump($second_post);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<ul>
    <?php foreach($all_posts as $posts) : ?>

    <div id="<?= $posts->id ?>">

        <h1><?= $posts->headline ?></h1>
        <p><?= $posts->text ?></p>
        <h4>Added at: <?= $posts->added_at ?></h4>

    </div>

    <?php endforeach; ?>
</ul>
</body>
</html>