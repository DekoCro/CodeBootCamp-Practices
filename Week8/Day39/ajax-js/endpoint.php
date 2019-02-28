This is Sparta
<?php

$response = [
    'status' => 'error',
    'errors' => [
        'The name must be submitted',
        'Yo man'
    ]
];

echo json_encode($response);