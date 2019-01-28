let number1 = 0;
let operator = null;

let val = document.querySelector("#input");
let out = document.querySelector("#output");

const binaryOperation = (symbol) => {
    calc();
    operator = symbol;
    val.value = '';
    val.focus();
    val.setSelectionRange(0, 1);
}

const calc = () => {
    const input = document.querySelector("#input");
    let number2 = parseInt(input.value);
    switch(operator) {
        case "+":
        number1 += number2;
        break;
        case "-":
        number1 -= number2;
        break;
        case "*":
        number1 *= number2;
        break;
        case "/":
        number1 /= number2;
        break;
        default:
        number1 = number2;
        break;
    }
    document.querySelector("#output").textContent = number1;
}

const clear = () => {
    document.querySelector("#output").textContent = '0';
    document.querySelector("#input").value = '0';
    number1 = 0;
    operator = null;
}

document.addEventListener('DOMContentLoaded', () => {
    const digitButtons = document.querySelectorAll('.nums');
    for(let btn of digitButtons) {
        btn.addEventListener('click', (event) => {
        const input = document.querySelector("#input");
        const digit = event.target.textContent;
        if(input.value === '0') {
            input.value = '';
        }

        input.value += digit;
        });
    }

    document.querySelector("#btn-plus").addEventListener('click', () => {
    binaryOperation("+");
    });

    document.querySelector("#btn-min").addEventListener('click', () => {
    binaryOperation("-");
    });

    document.querySelector("#btn-mul").addEventListener('click', () => {
    binaryOperation("*");
    });

    document.querySelector("#btn-div").addEventListener('click', () => {
    binaryOperation("/");
    });

    document.querySelector("#btn-clear").addEventListener('click', clear);
    document.querySelector("#btn-calc").addEventListener('click', calc);
});










