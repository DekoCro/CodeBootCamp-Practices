/*
        STAGE2

let shoppingList = [
    {
    name: 'beer',
    amount: 12
    },
    {
    name: 'wine',
    amount: 2 
    },
    {
    name: 'chicken',
    amount: 4
    },
    {
    name: 'beef',
    amount: 1
    }, 
    {
    name: 'salmon',
    amount: 3
    }];

const printList = item => {
    let itemElement = document.createElement('div');
    itemElement.className = "item";
    itemElement.textContent = item.name + ': ' + item.amount;
    return itemElement;

}

document.addEventListener('DOMContentLoaded', () => {
    let divElement = document.querySelector('.list');
    for (let item of shoppingList) {
        divElement.appendChild(printList(item));
    }
});*/

/*    STAGE3     */

let x = 0;
let w = 0;
const array = [];
const array1 = [];

let addItem = () => {
    array[x] = document.querySelector("#item").value;
    x++;
    array1[w] = document.querySelector('#amount').value;
    w++;
    document.querySelector("#item").value = "";
    document.querySelector("#amount").value = "";

    let output = "<hr/>";   
    for (let y = 0; y < array.length; y++) {
    output += `Item ${y} = ${array[y]}<br/>`;
    }
    let output1 = "<hr/>"; 
    for (let y = 0; y < array1.length; y++) {
    output1 += ` * ${array1[y]}<br/>`;
    }
    document.querySelector("#result").innerHTML = output;
    document.querySelector("#total").innerHTML = output1;
    console.log(array);
    console.log(array1);
}

document.addEventListener('DOMContentLoaded', () => {
    let submit = document.querySelector("#button");
    submit.addEventListener('click' , addItem);
});