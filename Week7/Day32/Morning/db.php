<?php


// task is to select 3 pages with 20 items each using LIMIT & OFFSET


function paginateCities($page_nr)
{
    $limit = 20;
    $offset = ($page_nr - 1) * $limit;

    $query = "SELECT *
        FROM `city`
        WHERE 1
        LIMIT {$offset}, {$limit}
    ";

    return $query;
}

$page1 = paginateCities(1);
var_dump($page1);

$page2 = paginateCities(2);
var_dump($page2);

$page3 = paginateCities(3);
var_dump($page3);

// learning keyword DELETE

// DELETE
// FROM `region`
// WHERE `slug` LIKE "%america%"

// LEFT JOIN example

// SELECT *
// FROM `users`
// LEFT JOIN `avatars`
//     ON `users`.`avatar_id` = `avatars`.`id`

// SELECT *
// FROM `users`
// LEFT JOIN `movies`
//     ON `users`.`favourite_genre_id` = `movies`.`genre_id`

// SELECT `user`.`email`, `avatar`.`url`
// FROM `user``
// LEFT JOIN `avatar`
//      ON `user`.`avatar_id` = `avatar`.`id`
// WHERE `id` = 1


// Using the database world write and execute a SQL query that would select all records in the table city with population above 5 million and left join the appropriate records in the country table using the CountryCode column.

// SELECT *
// FROM `city`
// LEFT JOIN `country`
//      ON `city`.`CountryCode` = `country`.`Code`
// WHERE `city`.`Population` > 5000000


//Using the database world write and execute a SQL query that would select all records int the table countrylanguage that have 'English' in their Language column and left join the appropriate records in the country table using the CountryCode column.

// SELECT * 
// FROM `countrylanguage` 
// LEFT JOIN `country` 
// 	ON `countrylanguage`.`CountryCode` = `country`.`Code` 
// WHERE `countrylanguage`.`Language` LIKE "%English%"
// ORDER BY `countrylanguage`.`Percentage` DESC,
// 	`country`.`Name` ASC