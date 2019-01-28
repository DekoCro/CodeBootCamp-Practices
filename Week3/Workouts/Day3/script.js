let account1 = "000256784";
let account2 = "000986056";
let account3 = "001546238";
let account4 = "030987456";

let balance1 = 790;
let balance2 = 5600;
let balance3 = 78065;
let balance4 = 120910;

let accNumber = prompt("What is your account number?");

const choice = cash => {
 let choice = prompt("Take some action: to check your balance, type in 'balance', or to withdraw, type in 'withdraw'.");
 if (choice === "balance") {
     alert(cash);
 } else if (choice === "withdraw") {
     withdraw(cash);
 } else {
     alert("Unknown command!");
 }
}

const withdraw = cash => {
    let raise = prompt("How mouch would you like to withdraw?");
    if (raise > cash) {
        alert("Not enough money!");
    } else {
      cash -= raise;
      alert("Your amount is: " + cash);
    }
}
if (accNumber === account1) {
    choice(balance1);
} else if (accNumber === account2) {
    choice(balance2);
} else if (accNumber === account3) {
    choice(balance3);
} else if (accNumber === account4) {
    choice(balance4);
} else {
    alert("Invalid account or unknown action!");
}




