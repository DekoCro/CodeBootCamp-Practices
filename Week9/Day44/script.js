const numbers = [15, 4, 11, 27, 56, 10, 4, 7, 14, 25, 66, 33];
const users = ['martha', 'eve', 'johnny', 'thedude', 'onyxx', 'dagesus', 'duckling44'];
const furniture = [
  {
    name: 'Table',
    price: 100,
    available: true,
  },
  {
    name: 'Chair',
    price: 20,
    available: false,
  },
  {
    name: 'Bookshelf',
    price: 55,
    available: true,
  },
  {
    name: 'Sofa',
    price: 1200,
    available: true,
  },
  {
    name: 'Coffeetable',
    price: 45,
    available: false,
  },
  {
    name: 'Bed',
    price: 800,
    available: false,
  },
  {
    name: 'Nightstand',
    price: 12,
    available: true,
  },
];

// MAPPING:

// Compute how far are all the values in numbers from the value 13.

// let computedNums = numbers.map(num => 13 - num);
// console.log(computedNums);

// Compute square roots of all the values in numbers.

// let computedNums = numbers.map(x => Math.sqrt(x));
// console.log(computedNums);

// Compute the lengths of all the usernames in users.

// let lengths = users.map(x => x.length)
// console.log(lengths);

// Create an array of 'li' DOM elements each containing a name from users.

let list = users.map(x => {
    let element = document.createElement('li');
    element.textContent = x;
    return element;
    
}).forEach(element => document.querySelector('ul').appendChild(element));
console.log(list);

// Get all the prices of all the pieces of furniture.

// let prices = furniture.map(x => x.price);
// console.log(prices);

//FILTERING: 

// Get only odd numbers from the array numbers.

// let oddNums = numbers.filter(num => num % 2);
// console.log(oddNums);

// Get an array of only those pieces of furniture which are cheaper then 120 dollars.

// let cheap = furniture.filter(x => x.price < 120)
// console.log(cheap);

// Get an array of available pieces of furniture.

// let avaliable = furniture.filter(x => {
//     if(x.available === true) {
//         return x.available;
//     }
// });
// console.log(avaliable);

// REDUCING:

// Turn the numbers array into a long string of all those numbers.

// let string = numbers.reduce((acc, val) => {
//     return acc + val;
// }, '');
// console.log(string);

// Sum all the prices of all the furniture items.

// let prices = furniture.map(x => x.price).reduce((acc, val) => {
//     return acc + val;
// });
// console.log(prices);