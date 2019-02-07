<?php 
/*
$my_name = "Andelko";

$height = "179cm";

var_dump($my_name);

var_dump($height);

function headline($content)
{
    echo "<h1>{$content}</h1>";
}

echo headline("Hi man!");

$inches = 12;

function inchesToCentimeters($size)
{
    return  $size * 2.54;
}

echo inchesToCentimeters($inches);


$celsius = 100;


function celsiusToFahrenheit($temp)
{
    return (9/5) * $temp + 32;
}


echo "<br>" . celsiusToFahrenheit($celsius);


$temperature = 36.5;

function isHealthy($temperature, $unit)
{
    if($temperature < 37){
        return "True";
    } else {
        return "False";
    }
}

echo "<br>" . isHealthy(12, 'c');

$number = 42;

function everOrOdd($num)
{
   return $num % 2 == 0 ? 
    'Even': 
    'Odd';
}

echo "<br>" . everOrOdd($number);

$weekday = 'Tuesday';

function sayWeekday($day)
{
    echo "<br>Today is " . $day;
}

sayWeekday($weekday);

$year_of_birth = 1990;

function sayBirthday($year)
{
    $this_year = 2019;
    echo "<br>I was born in {$year} so this year I am celebrating my " . ($this_year - $year) . " birthday.";
}

sayBirthday($year_of_birth);

function assessHeight($cm_height)
{
    if($cm_height > 180){
        return 'Tall';
    } elseif ($cm_height < 180 && $cm_height > 160){
        return 'Average';
    } else {
        return 'Small';
    }
}

echo "<br>" . assessHeight(179);

function getLanguageUsage($lng) {
    switch($lng){
        case 'php':
        case 'ruby':
        case 'pyton':
        return strtoupper('Serverside');
        break;
        case 'javascript':
        return strtolower('Clientside');
        break;
        default:
        return "I don't know.";
        break;
    }
}

echo "<br>" . getLanguageUsage('php');

$age = 21;
$gender = "male";
$employed = false;

if ($age < 25){

} elseif($employed == true) {

} elseif($age > 34 && $employed == false){

} elseif($age <= 18){

} elseif($age < 12 && $gender == "female"){

} elseif($age >= 18 && $employed == false){

} elseif($age >= 60 && $employed == true && $gender == 'female'){
    
} elseif(($gender == 'male' && $age > 30) || ($employed == false && $gender == 'female' && $age < 25)){

}


$cars_i_want = [];

var_dump($cars_i_want);

$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";

var_dump($cars_i_want);


echo "For myself I would buy " .$cars_i_want[1]. "<br>";
echo "For myself spouse I would buy " .$cars_i_want[3]. "<br>";

$cars_i_want[4] = "Smart";

echo "Each of my kids will get ".$cars_i_want[4]. "<br>";


foreach($cars_i_want as $car){
    echo "<li>$car</li>";
}



$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

foreach($vehicles as $key => $value) {
    echo "<tr>
    <th>Means of transport</th>
    <th>Max. speed (km/h)</th>
<tr><br>
<tr>
    <td>$key</td>
    <td>$value</td>
</tr><br>";
}

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];


foreach($messages as $text) 
 
   echo "<ul class='messages' style='padding: 1em; border: 1px        solid     black; margin: 1em;'>
        <li>$text</li>
    </ul>";
*/


