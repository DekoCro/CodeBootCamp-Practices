<?php 

require_once "Dice.php";

$dices = 1;

if(isset($_GET['num_dices'])) {
    $dices = $_GET['num_dices'];
}

$sides = 1;

if(isset($_GET['num_sides'])) {
    $sides = $_GET['num_sides'];
}

$dice = [];
for($i = 0; $i < $dices; $i++) {

    $die = new Dice($sides);

    $die->roll();

    $dice[] = $die;
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dices</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="get">

        <input type="text" name="num_dices" value="<?= htmlspecialchars($dices) ?>">

        <select name="num_sides">
            <option value="4" <?= $sides == 4 ? 'selected' : '' ?>>4</option>
            <option value="6" <?= $sides == 6 ? 'selected' : '' ?>>6</option>
            <option value="8" <?= $sides == 8 ? 'selected' : '' ?>>8</option>
            <option value="10" <?= $sides == 10 ? 'selected' : '' ?>>10</option>
            <option value="20" <?= $sides == 20 ? 'selected' : '' ?>>20</option>
        </select>

        <input type="submit" name="roll teh dice!">
    </form>


    <div class="dice">

    <?php foreach($dice as $die) : ?>

        <?= $die ?>

    <?php endforeach; ?>
      

    </div>
</body>
</html>