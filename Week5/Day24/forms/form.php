<?php

require 'lib/DBBlackbox.php';

// handle the incoming request here

// to save any data to the "database":
// insert($any_data)
// $any_data MUST be an array

var_dump($_POST);

/*    this way ....or next one

if(isset($_POST['name'])){
    $data = $_POST['name'];
} else {
    $data = "";
}*/


//     better way below 

function give_me_post_data($index, $default = "")
{
   return isset($_POST[$index]) ? $_POST[$index] : '';
}


//    or if we want to make it encoded using htmlspecialchars we can write another function like this one below

function print_post_data($index, $defalut = "")
{
    $raw_data = give_me_post_data($index, $defalut = "");

    $encoded_data = htmlspecialchars($raw_data);

    return $encoded_data;
}

// we can delete ones below cuz we passed function inline of html

//$data = give_me_post_data('name');
//$message = give_me_post_data('text');


// below is example of how to add data to data base

$data_to_save = [
    'name' => give_me_post_data('name'),
    'text' => give_me_post_data('text')
];

// and this below is how to insert the prepared data to database 

insert($data_to_save);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms exercise</title>
</head>
<body>

    <!-- create your form here -->

    <form action="" method="post">

        <label for="">Name:</label>
        <input type="text" name="title" value="<?= print_post_data('title') ?>">
        <br>
        <br>

        <label for="">Describe the plot!</label><br>
        <textarea name="plot" id="" cols="30" rows="10"><?= print_post_data('plot') ?></textarea>
        <br>
        <br>
        <br>

        <?= select_field('color', [
            'white' => 'Whitey',
            'black' => 'Blackie',
            'green' => 'Grinch',
            'blue' => 'Avatar',
            'red' => 'Dragon'
        ], give_me_post_data('color')) ?>
        <br>
        <br>
        <br>

        <?= select_field('gender', [
            'male' => 'Boy',
            'female' => 'Girl'
        ], give_me_post_data('gender')) ?>

        <label for="as_food">Do you want to eat it?</label>
        <input type="checkbox" name="as_food" id="as_food" value="1" <?= give_me_post_data('as_food') == 1 ? 'checked' : '' ?>>

        <label for="cooked">Do you want it pre-cooked?</label>
        <input type="checkbox" name="cooked" id="cooked" value="2" <?= give_me_post_data('cooked') == 2 ? 'checked' : '' ?>>

        <br>
        <br>

        <label for="rating_1">1 star</label>
        <input type="radio" name="stars" value="1" id="rating_1" <?= give_me_post_data('legs') == 1 ? 'checked' : '' ?>>
        <label for="rating_2">2 stars</label>
        <input type="radio" name="stars" value="2" id="rating_2" <?= give_me_post_data('legs') == 2 ? 'checked' : '' ?>>
        <label for="rating_3">3 stars</label>
        <input type="radio" name="stars" value="3" id="rating_3" <?= give_me_post_data('legs') == 3 ? 'checked' : '' ?>>
        <label for="rating_4">4 stars</label>
        <input type="radio" name="stars" value="4" id="rating_4" <?= give_me_post_data('legs') == 4 ? 'checked' : '' ?>>
        <label for="rating_5">5 stars</label>
        <input type="radio" name="stars" value="5" id="rating_5" <?= give_me_post_data('legs') == 5 ? 'checked' : '' ?>>
        <br>
        <br>

        <input type="submit" value="Click me!">

    </form>
    
</body>
</html>