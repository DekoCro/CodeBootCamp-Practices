<?php

$page_title = 'Shopping List';

$page = 'home';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
// here we are sure that we have $page and it contains a value

$items = [];

if(!empty($_POST['items'])){ // $_POST['items'] is set & it is not empty (0, " ",[])
    var_dump($_POST);

    $items = array_filter($_POST['items']);

    // this above takes an array as argument and returns a new array...it filters empty items
}


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
    <nav>
        <a href="?page=home">Home</a>
        <a href="?page=form">Form</a>
    </nav>


    <h1><?= $page_title ?></h1>

    <?php if($page == 'home') : ?>

        <?php include 'home.php'; ?>

    <?php elseif($page == 'form') : ?>

        <?php include 'form.php'; ?>

    <?php endif ; ?>

    
</body>
</html>