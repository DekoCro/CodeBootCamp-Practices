
let min = parseInt(prompt("Enter your minimal number!"));
let max = parseInt(prompt("Enter your maximal number!"));
let randomNum3 = Math.floor(Math.random() * (max - min + 1)) + min;
console.log(randomNum3);