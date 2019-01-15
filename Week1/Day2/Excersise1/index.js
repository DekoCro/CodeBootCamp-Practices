
let button = document.querySelector("button");
let line = document.querySelector(".middle");


let changeColor = () => {
    let first = Math.floor((Math.random() * 255) + 1);
    let second = Math.floor((Math.random() * 255) + 1);
    let third = Math.floor((Math.random() * 255) + 1);
    line.style.color = `rgb(${third}, ${second}, ${first})`;
    line.style.backgroundColor = `rgb(${first}, ${second}, ${third})`;
}

button.addEventListener('click',changeColor);