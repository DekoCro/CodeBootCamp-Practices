<?php

require_once 'lib/DBBlackbox.php';

require_once 'Comment.php';

$comment = new Comment;

if($_POST) {

    var_dump($_POST);

    $comment->fillFromArray($_POST);

    $comment->save();

    // redirect
    header('Refresh: 0');
    exit();
}

//select all saved posts
$all_comments_as_arrays = select();

var_dump($all_comments_as_arrays);

$comments = [];

foreach($all_comments_as_arrays as $comments_as_arrays) {

    $post = new Comment;

    $post->fillFromArray($comments_as_arrays);

    $comments[] = $post;
}
var_dump($comments);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>
        
        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company said.</p>

    </article>

    <div class="comments">
        <h2>Comment below:</h2>

       <form action="" method="post">

            <label for="">Insert author:</label><br>
            <input type="text" name="author" value="<?= htmlspecialchars($comment->author) ?>"><br>
            <label for="">Insert text:</label><br>
            <textarea name="text" id="" cols="30" rows="5"><?= htmlspecialchars($comment->text) ?></textarea><br>
            <input type="submit" name="Save it!">
            <br><br><br><br><br>

       </form>
        
    </div>
    <?php foreach($comments as $posts) : ?>
        <div class="comments">
                <h2><?= htmlspecialchars($posts->author) ?></h3>
                <p><?= htmlspecialchars($posts->text) ?></p>
                <h4><?= htmlspecialchars($posts->created_at) ?></h4><br>
        </div>
    <?php endforeach ?>
</body>
</html>