<?php

require_once "DBBlackbox.php";


function give_me_post_data($index, $default = "")
{
    if(isset($_POST[$index])) {
        $data = $_POST[$index];
    } else {
        $data = $default;
    }

    return $data;
};

function print_post_data($index, $default = '') 
{
    $raw_data = give_me_post_data($index, $default);

    $encoded_data = htmlspecialchars($raw_data);

    return $encoded_data;
}


$data_to_save = [
    'name' => give_me_post_data('movie'),
    'year' => give_me_post_data('year'),
    'genre' => give_me_post_data('genre'),
    'is_released' => give_me_post_data('is_released'),
    'plot' => give_me_post_data('plot'),
    'rating' => give_me_post_data('rating'),
];
// insert the prepared data into the "DB"
insert($data_to_save);

var_dump($data_to_save);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>

<form action="" method="POST">

    <label for="">Enter movie name:</label>
    <input type="text" name="movie" value="<?= print_post_data('movie') ?>"><br>

    <label for="">Enter release year:</label>
    <input type="text" name="year" value="<?= print_post_data('year') ?>"><br>

    <label for="">Enter genre:</label>
    <select name="genre">
        <option value="action" <?= give_me_post_data('genre') == "action" ? 'selected' : '' ?>>Action</option>
        <option value="comedy" <?= give_me_post_data('genre') == "comedy" ? 'selected' : ''  ?>>Comedy</option>
        <option value="sci-fi" <?= give_me_post_data('genre') == "sci-fi" ? 'selected' : ''  ?>>Sci-fi</option>
        <option value="horror" <?= give_me_post_data('genre') == "horror" ? 'selected' : ''  ?>>Horror</option>
        <option value="drama" <?= give_me_post_data('genre') == "drama" ? 'selected' : ''  ?>>Drama</option>
    </select><br>

    <label for="">Is it released?</label><br>
    <input type="radio" name="is_released" value="yes" <?= give_me_post_data('is_released') == "yes" ? 'checked' : '' ?>>Yes<br>
    <input type="radio" name="is_released" value="no" <?= give_me_post_data('is_released') == "no" ? 'checked' : '' ?>>No<br>

    <label for="">Enter movie plot:</label>
    <input type="text" name="plot" value="<?= print_post_data('plot') ?>"><br>

    <label for="">Enter movie rating:</label>
    <select name="rating">
        <option value="1" <?= give_me_post_data('rating') == 1 ? 'selected' : '' ?>>1</option>
        <option value="2" <?= give_me_post_data('rating') == 2 ? 'selected' : '' ?>>2</option>
        <option value="3" <?= give_me_post_data('rating') == 3 ? 'selected' : '' ?>>3</option>
        <option value="4" <?= give_me_post_data('rating') == 4 ? 'selected' : '' ?>>4</option>
        <option value="5" <?= give_me_post_data('rating') == 5 ? 'selected' : '' ?>>5</option>
    </select>

    <input type="submit" value="Post">
</form>
    
</body>
</html>


