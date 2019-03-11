// Write a function testNum that takes a number as an argument and returns a Promise that tests if the value is less than (resolve) or greater than (reject) the value 10.


const testNum = number => {
    return new Promise((resolve, reject) => {
        if(number < 10) {
            resolve(number)
        } else {
            reject('Oh Kuba its soooo bigg!!!')
        }
    }, 3000)
}


// Make a function that promises a random coin toss. Use setTimeout to delay the toss by 2 seconds. In one third of the cases the promise should resolve in 'tails', in one third it should resolve in 'heads' and in one third of the time it should reject as the coin fell off the table. Call the function toss.



const coin = (head, tail, table) => {
    let num = Math.random();
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if(num <= 0.33) {
                resolve(head);
            } else if(num > 0.33 && num <= 0.66) {
                resolve(tail);
            } else {
                reject(table);
            }
        }, 2000)
    }) 
}

// Make a function that takes in a single parameter and returns a new promise. using setTimeout, after 500 milliseconds, the promise will either resolve or reject. If the input is a string, the promise resolves with that same string uppercased. if the input is anything but a string it rejects with that same input. Call the function delayedUpperCase.

const func = value => {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            if(typeof(value) === 'string') {
                resolve(value.toUpperCase());
            } else {
                reject(value)
            }
        }, 500)
    })
}