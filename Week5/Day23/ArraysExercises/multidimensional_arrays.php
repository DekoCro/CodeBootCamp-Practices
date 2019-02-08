<?php
/*
$movie_names = [
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

  $movies = [];
  

foreach($movie_names as $index => $movie) {
  $movies[] = [
    'name' => $movie,
    'rating' => $movie_ratings[$index]
  ];
}


  var_dump($movies);

  */

  function do_something_risky() {
    // pretend to do the risky stuff
   
    // return new messages
    return [
      'error' => [
        'I knew this would happen!',
        'This always happens.'
      ],
      'warning' => [
        'You should fix this before proceeding'
      ],
      'success' => []
    ];
  }
   
  // let's try it
  $new_messages = do_something_risky();

  $messages = [
    'error' => [
      'Something went wrong',
      'Something went REALLY wrong',
      'There is no end to this!'
    ],
    'warning' => [
      'This is your first warning',
      'This is your final warning'
    ],
    'success' => [
      'Finally, something was successful.'
    ]
  ];



$result_messages = [];
foreach ($messages as $type => $messages_type) {
    $messages[$type] = array_merge($messages_type, $new_messages[$type]);
}



var_dump($messages);

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
         <div class="messages">

          <?php foreach($messages as $type => $message_type) : ?>

            <?php foreach($message_type as $message) : ?>

            <div class="message <?= $type ?>"><?= $message ?></div>

            <?php endforeach; ?>
          <?php endforeach; ?>
         </div>

  </body>
  </html>