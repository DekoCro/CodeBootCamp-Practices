let dice = document.querySelectorAll(".dice");
let roll = document.querySelector('#roll');

let sides = []
let value = 0;

for(let one of dice){
    roll.addEventListener('click', () => {
        let number = Math.floor(Math.random() * 6) + 1;
        if(number === 1) {
            one.className = "side-1";
            value = 1;
            sides += value;
        } else if (number === 2) {
            one.className = "side-2";
            value = 2;
            sides += value;
        } else if (number === 3) {
            one.className = "side-3";
            value = 3;
            sides += value;
        } else if (number === 4) {
            one.className = "side-4"; 
            value = 4;
            sides += value;   
        } else if (number === 5) {
            one.className = "side-5";
            value = 5;
            sides += value;
        } else if (number === 6) {
            one.className = "side-6";
            value = 6;
            sides += value;
        }
        sides.push(value);
    });
};
console.log(sides);