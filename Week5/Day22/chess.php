<?php 

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];


?>

<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <ul class='messages' style='padding: 1em; border: 1px        solid     black; margin: 1em;'>

    <?php foreach($messages as $text) : ?>

    <li><?php echo $text; ?></li>

    <?php endforeach; ?>
    </ul>
    
    
        
    </body>
</html>