<?php

require_once "Object.php";

$obj1 = new Object();

if(isset($_POST['type'])) {
    $obj1->type = $_POST['type'];
}
if(isset($_POST['num'])) {
    $obj1->value = $_POST['num'];
}
if(isset($_POST['color'])) {
    $obj1->color = $_POST['color'];
}
if(isset($_POST['size']) ){
    $obj1->size = $_POST['size'];
}

var_dump($obj1);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Type</label>
    <input type="text" name="type" value="<?= htmlspecialchars($obj1->type) ?>"><br>
    <label for="">Number of objects</label>
    <input type="text" name="num" value="<?= htmlspecialchars($obj1->value) ?>"><br>
    <label for="">Color</label>
    <input type="text" name="color" value="<?= htmlspecialchars($obj1->color) ?>"><br>
    <label for="">Size</label>
    <input type="text" name="size" value="<?= htmlspecialchars($obj1->size) ?>"><br>

    <input type="submit" value="Submit!">

    </form>
</body>
</html>