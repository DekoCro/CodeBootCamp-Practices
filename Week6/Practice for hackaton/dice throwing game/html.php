<?php

require_once 'Dice.php';

$dices = 0;

if(isset($_POST['nr_of_dices'])){
    $dices = $_POST['nr_of_dices'];
}

$sides = 0;

if(isset($_POST['nr_of_sides'])){
    $sides = $_POST['nr_of_sides'];
}

$all_dices = [];

for ($i = 0; $i < $dices; $i++){

        $die = new Dice($sides);

        $die->roll();

        $all_dices[] = $die;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dices</title>
    <style>
        .dice {
            display: flex;
            flex-flow: row wrap;
        }
        .dice .die {
            width: 2em;
            height: 2em;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid black;
            border-radius: 0.125em;
            margin: 0.25em;
        }
    </style>
</head>
<body>

<form action="" method="POST">

    <label for="">Number of dices:</label><br>
    <input type="text" name="nr_of_dices" value="<?= htmlspecialchars($dices) ?>"><br>

    <select name="nr_of_sides">
        <option value="4" <?= $sides == 4 ? 'selected' : '' ?>>4</option>
        <option value="6" <?= $sides == 6 ? 'selected' : '' ?>>6</option>
        <option value="8" <?= $sides == 8 ? 'selected' : '' ?>>8</option>
        <option value="10" <?= $sides == 10 ? 'selected' : '' ?>>10</option>
        <option value="20" <?= $sides == 20 ? 'selected' : '' ?>>20</option>
    </select>

    <input type="submit" value="Submit!">

</form>

    <div class="dice">

    <?php foreach($all_dices as $die) : ?>

        <?= $die ?>

    <?php endforeach; ?>

    </div>
    
</body>
</html>