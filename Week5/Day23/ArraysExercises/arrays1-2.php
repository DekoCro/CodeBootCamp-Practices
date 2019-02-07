<?php

$movies = [
    'tt0468569' => 'Solo',
    'tt0050083' => 'Phantom Menace',
    'tt0108052' => 'Attack of the Clones',
    'tt0110912' => 'Revenge of the Sith',
    'tt0167260' => 'Rouge One', 
    'tt0111161' => 'The New Hope', 
    'tt0071562' => 'Empire strikes back',
    'tt0060196' => 'Return of the Jedi',
    'tt0137523' => 'The Force Awakens',
    'tt0068646' => 'The Last Jedi'
  ];

  $movie_ratings = [
    'tt0111161' => 9.2,
    'tt0068646' => 9.2,
    'tt0071562' => 9.0,
    'tt0468569' => 8.9, 
    'tt0050083' => 8.9, 
    'tt0108052' => 8.9,
    'tt0110912' => 8.9,
    'tt0167260' => 8.9,
    'tt0060196' => 8.9,
    'tt0137523' => 8.8
  ];


  sort($movies);
  arsort($movie_ratings);

  ?>

  <!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Movies</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  </head>
  <body>
      
    <ol>

        <?php foreach(array_combine($movies, $movie_ratings) as $key => $value) : ?>

        <li><?php echo $key ." - ". $value; ?></li>
        
        <?php  endforeach; ?>
       
    </ol>

    <ol>

    <?php for($i = 0; $i < count($movies, 1); $i++) : ?>

        <li><?php echo $movies[$i]; ?></li>

        <?php  endfor ; ?>

    </ol>

  </body>
  </html>