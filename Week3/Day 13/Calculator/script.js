const wage = document.querySelector("#wage");
const hours = document.querySelector("#hours");
const days = document.querySelector("#days");


const calculate = () => {
    let money = parseInt(wage.value); 
    let hrs = parseInt(hours.value); 
    let day = parseInt(days.value);  
    let total = document.querySelector(".salary");
    let salary = money * hrs * day;
    total.innerHTML = salary + " euro";
    total.style.fontWeight = "bold";
    total.style.textDecoration = "underline";
    total.style.backgroundColor = "white";

    if (salary < 2000) {
        total.style.color = "red";
    } else if (salary >= 2000 && salary <= 3000) {
        total.style.color = "gold";
    } else if (salary > 3000) {
        total.style.color = "green";
    } else {

    }
  }
  