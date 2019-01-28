const accNumber = document.querySelector("#account");
const form = document.querySelector(".form");

let account1 = "000256784";
let account2 = "000986056";
let account3 = "001546238";
let account4 = "030987456";

let balance1 = 790;
let balance2 = 5600;
let balance3 = 78065;
let balance4 = 120910;

const onAction = (select) => {
    let userAccount = document.querySelector("#account");
    let userAction = select.value;
    if (userAction === 'balance') {
        let userBalance = null;

        if (userAccount === account1) {
            userBalance = balance1;
        } else if (userAccount === account2) {
            userBalance = balance2;
        } else if (userAccount === account3) {
            userBalance = balance3;
        } else if (userAccount === account4) {
            userBalance = balance4;
        }
    } else if (userAction === "withdraw") {
        let withdrawEle = document.querySelector("#wthd");
        withdrawEle.innerHTML = '<input type="text" />';
    }
}




/*
const bank = () => {
    let account = accNumber.value;
    let text = document.querySelector(".salary");
    if (account === account1) {
        form.style.visibility = "visible";
    } else if (account === account2) {
        form.style.visibility = "visible";
    } else if (account === account3) {
        form.style.visibility = "visible";
    } else if (account === account4) {
        form.style.visibility = "visible";
    } else {
        text.innerHTML = "Invalid account!";
    }
}

let selector = document.querySelector("#selector");
let action = document.querySelector("#action");
let command = action.value;


const balance = () => {
    let account = accNumber.value;
    let result = document.querySelector(".result");
     if (command === "balance" && account === account1) {
       result.innerHTML = "Your balance is: " + balance1 +  " euro.";
     } else if (command === "balance" && account === account2) {
        result.innerHTML = "Your balance is: " + balance2 +  " euro.";
      } else if (command === "balance" && account === account3) {
        result.innerHTML = "Your balance is: " + balance3 +  " euro.";
      } else if (command === "balance" && account === account4) {
        result.innerHTML = "Your balance is: " + balance4 +  " euro.";
      }
}



*/












