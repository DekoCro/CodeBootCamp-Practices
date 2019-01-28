/* task 1 

Ask the user for his birth year using the prompt function. Convert the result into a number by calling parseInt. Compute the users age using the current year. Alert a message to the user reporting his age using the alert function. */

/* --------task 1 solution------

let birth = parseInt(prompt("Enter your birth year!"));
let currentYear = 2019;

let age = currentYear - birth;
alert('You are ' + age + ' years old.');
*/

/* task2
The current exchange rate from czech crownd to euro is 25.695. Get a value from the user in euros and output equivalent value in czech crownds. Ruond the result to whole crownds using the Math.round function
*/
/* ----------task 2 solution----------
let euro = parseInt(prompt("How much euro's would you like to exchange?"));
let crown = 25.696;
let total = euro * crown;
let roundedNum = Math.round(total);
alert("Value in czech crown is: " + roundedNum);
*/

/* task 3
The function Math.random output a random floating point number between 0 and 1. Figure out how to use this function to draw whole numbers from 0 to 5.
Figure out how to simulate a dice roll with Math.random(). Beware that this functions returns random floating point numbers between 0 and 1 but we want to have integers between 1 and 6. Thus, you have to unleash some maths of rounding and shifting the result of Math.random() to produce the desired result.*/

/* ------task 3 solution---------
let random = Math.round(Math.random() * 5) + 1;
console.log(random);
*/
/* task 4 
Write a function square which takes a number as an input and return the square of that number.
Write a function called hypotenuse which takes two numbers a and b and return the square root of a2 + b2. Use the Math.sqrt function to compute the square root and use your square function to compute the squares.*/

/* -----task 4 solution------
let square = number => {
    return number * number;
};
let hypotenuse = (a, b) => {
    return Math.sqrt((a * a) + (b * b));
};

console.log(square(18));
console.log(hypotenuse(5, 5));*/