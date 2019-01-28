let pay = parseInt(prompt("Enter your hourly pay"));
let hours = parseInt(prompt("Enter your hours per day"));
let days = parseInt(prompt("Enter your days per month"));
 
let tax = 0.25;

const salary = (pay, hours, days) => {
    return pay * hours * days;
}
const taxedSalary = (amount, tax) => {
    return amount * (1 - tax);
}
let money = salary(pay, hours, days);
let salary2 = taxedSalary(money, tax);

let message = "Your salary is " + salary2 + " after tax.";
alert(message);

