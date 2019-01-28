/*
Listing numbers

1.Output the number of items in the array to the console.
2.Output the number at the index 13 to the console.
3.Output the number which is exactly in the middle of the array.
4.Output every number in the array to the console.
5.Output the square of every number to the console.
6.Output only negative numbers from the array.
7.Output an absolute value of every number in the array.
8.Output only those numbers which absolute value id divisible by 3.
9.Output only even numbers from the array.
10.Output the difference of every number in the array from number 5.
11.Output the squared difference of every number in the array from number 5.

Counting

12.Count how many negative numbers are there in the array.
13.Compute the sum of all the numbers in the array
14.Compute the average of the numbers in the array.
15.Compute the sum of all the positive numbers in the array.
16.First, compute the average number in the array and save the result in variable. Then compute the sum of squared differences from the average.
17.Compute the variance of the array. Variance is the average of squared differences from the average.*/

const numbers = [18, 8, -24, 28, -17, 14, -10, 24, 12, -31, 19, 32, -14, -10, 13, 8, -15, -2];
//1.console.log(numbers.length);

//2.console.log(numbers[13]);

/*3.let theMiddle = Math.floor(numbers.length / 2); 
console.log(numbers[theMiddle]);*/

//4.console.log(numbers);

/*5.const squareNumbers = numbers.map(num => {
    return num * num;
})
console.log(squareNumbers);*/

/*6.const negativeNumbers = numbers.filter(num => {
    return num < 0;
})
console.log(negativeNumbers);*/

/*7.for (let nums of numbers) {
    if (nums < 0) {
     nums = -1 * nums;
     console.log(nums);
    }
}*/

/*8.for (let number of numbers) {
    if (number % 3 === 0) {
        console.log(number);
    }
}*/

/*9.for (let number of numbers) {
    if (number % 2 === 0) {
        console.log(number);
    }
}*/

/*10.for (let number of numbers) {
    number = number - 5;
    console.log(Math.abs(number));
}*/

/*11.for (let number of numbers) {
    number = (number - 5) * (number - 5);
    console.log(Math.abs(number));
};*/

/*12.for (let number of numbers) {
    if (number < 0) {
        console.log(number.length);
    }
}*/

/*13.const summedNums = numbers.reduce((num, currentValue) => {
    return num + currentValue;
}); 
console.log(summedNums);*/

/*14.let averageNum = numbers.reduce((num , currentValue) => {
    return num + currentValue;
});
let avg = averageNum / numbers.length;
console.log(avg);*/

/*15.let sum = 0;
for (let number of numbers) {
    if (number > 0) {
        sum += number;
    }
}
console.log(sum);*/

/*16.let averageNum = numbers.reduce((num , currentValue) => {
    return num + currentValue;
});
let avg = averageNum / numbers.length;

let number = 0;
let sum = 0;

for (number of numbers) {
    number -= avg;
    let sqNum = number * number;
    sum += sqNum;
    console.log(sum);
}*/

