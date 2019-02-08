<?php

require 'lib/DBBlackbox.php';

var_dump($_POST);

function give_me_post_data($index)
{
    return isset($_POST[$index]) ? $_POST[$index] : '';
};

function print_encoded_data($index, $defalut = "")
{
    $raw_data = give_me_post_data($index);

    $encoded_data = htmlspecialchars($raw_data);

    return $encoded_data;
};

/*$data_to_save = [
    'name' => give_me_post_data('name'),
    'text' => give_me_post_data('text')
];

insert($data_to_save);*/

/*function print_characters($value, $label, $name)
{
    ?>
        <option value="<?= $value ?>" <?= give_me_post_data($name) == $value ? 'selected' : '' ?>><?= $label ?></option>;

    <?php
}*/

function select_character($name, array $values, $selected = null)
{
    $html = "";
    $html = "<select name=\"{$name}\">";
    foreach($values as $value => $label){
        $selected_character = $value == $selected ? 'selected' : '';
        $html .= "<option value=\"{$value}\" {$selected_character}>{$label}</option>";
    };
    $html .= "</select>";

    return $html;
};


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movie Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

<form action="" method="post">

<main>
    <div class="column">
        <label for="">CHOOSE FAVOURITE STAR WARS MOVIE:</label>
        <?= select_character('movie', [
            'ep I' => 'Phantom Menace',
            'ep II' => 'Attack of the Clones',
            'ep III' => 'Revenge of the Sith',
            'ep IV' => 'The New Hope',
            'ep V' => 'Empire Strikes Back',
            'ep VI' => 'The Return of the Jedi',
            'ep VII' => 'The Force Awakens',
            'ep VIII' => 'The Last Jedi',
            'story I' => 'Rouge One',
            'story II' => 'Solo'
        ], give_me_post_data('movie')) ?>
    </div>
    
    <div class="column">
        <label for="">Describe the plot!</label>
        <textarea name ="plot" id="" cols="30" rows="10"><?= print_encoded_data('plot')  ?></textarea>
    </div>
</main>





<div class="radio">
    <div>
    <label for="">CHOOSE FAVOURITE CHARACTER:</label>
    <?= select_character('character', [
        'solo' => 'Han Solo',
        'leia' => 'Princess Leia',
        'luke' => 'Luke Skywalker',
        'kenobi' => 'Obi-Wan Kenobi',
        'chewiee' => 'Chewbacca',
        'vader' => 'Darth Vader',
        'boba' => 'Boba Fett',
        'emperor' => 'Emperor Palpatine',
        'dooku' => 'Count Dooku',
        'maul' => 'Darth Maul'
    ], give_me_post_data('character')) ?>
    </div>
    <div>
    <label for="">CHOOSE YOUR SIDE:</label>
        <aside class="column">
            <aside class="row">
                <input type="radio" name="side" value="rebels" id="rebels" <?= give_me_post_data('side') == "rebels" ? 'checked' : '' ?>>
                <label for="rebels">REBELS</label>
            </aside>
            <aside class="row">
                <input type="radio" name="side" value="empire" id="empire" <?= give_me_post_data('side') == "empire" ? 'checked' : '' ?>>
                <label for="empire">EMPIRE</label>
            </aside>
        </aside>
    </div>
    <div>
    <label for="">CHOOSE FAVOURITE TRIOLOGY:</label>
        <aside class="column">
            <aside class="row">
                <input type="radio" name="triology" value="prequel" id="prequel" <?= give_me_post_data('triology') == "prequel" ? 'checked' : '' ?>>
                <label for="prequel">PREQUEL TRIOLOGY</label>
            </aside>
            <aside class="row">
                <input type="radio" name="triology" value="original" id="original" <?= give_me_post_data('triology') == "original" ? 'checked' : '' ?>>
                <label for="original">ORIGINAL TRIOLOGY</label>
            </aside>
                <aside class="row">
                <input type="radio" name="triology" value="sequel" id="sequel" <?= give_me_post_data('triology') == "sequel" ? 'checked' : '' ?>>
            <label for="sequel">SEQUEL AND STAR WARS STORIES</label>
            </aside>
        </aside>
    </div>
    <div>
    <label for="">RATE THE MOVIE:</label>
        <aside class="row">
            <input type="radio" name="stars" value="1" id="rating_1" <?= give_me_post_data('stars') == 1 ? 'checked' : '' ?>>
            <label for="rating_1">1 star</label>
        </aside>
       <aside class="row">
            <input type="radio" name="stars" value="2" id="rating_2" <?= give_me_post_data('stars') == 2 ? 'checked' : '' ?>>
            <label for="rating_2">2 stars</label>
       </aside>
        <aside class="row">
            <input type="radio" name="stars" value="3" id="rating_3" <?= give_me_post_data('stars') == 3 ? 'checked' : '' ?>>
            <label for="rating_3">3 stars</label>
        </aside>
        <aside class="row">
            <input type="radio" name="stars" value="4" id="rating_4" <?= give_me_post_data('stars') == 4 ? 'checked' : '' ?>>
            <label for="rating_4">4 stars</label>
        </aside>
        <aside class="row">
            <input type="radio" name="stars" value="5" id="rating_5" <?= give_me_post_data('stars') == 5 ? 'checked' : '' ?>>
            <label for="rating_5">5 stars</label>
        </aside>
    </div>
</div>

<input type="submit" value="Click Me" class="btn">

</form>

    
</body>
</html>