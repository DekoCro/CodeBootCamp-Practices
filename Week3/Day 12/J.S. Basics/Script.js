let pay = 20;
let hours = 8;
let days = 21;

let salary = pay * hours * days;
let tax = 0.75;
let salary1 = salary * tax;
console.log(salary1);

let hours1 = 6;
let days1 = 26;
let tax1 =  0.8;
let salarya = pay * hours1 * days1;
let salary2 = salarya * tax1;
console.log(salary2);
//-----------------MATH MAX SHOWS WHICH ONE IS BIGGER---------
let better = Math.max(salary1, salary2);
console.log(better);

//--------------SAME THING BUT WITH FUNCTIONS-----------------

const placa = (satnica, sati, dani) => {
    return satnica * sati * dani;
}

const nakonporeza = (iznos, porez) => {
    return iznos * (1 - porez);
}


let novac = placa(20, 8, 21);
let placa2 = nakonporeza(novac, 0.25);
console.log(placa2);