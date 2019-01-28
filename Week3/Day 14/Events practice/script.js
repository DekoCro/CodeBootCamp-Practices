let fieldStatus = false;

let bRock1 = document.querySelector("#black-rock1");
let bRock2 = document.querySelector("#black-rock2");
let bKnight1 = document.querySelector("#black-knight1");
let bKnight2 = document.querySelector("#black-knight2");
let bBishop1 = document.querySelector("#black-bishop1");
let bBishop2 = document.querySelector("#black-bishop2");
let bQueen = document.querySelector("#black-queen");
let bKing = document.querySelector("#black-king");
let pawns = Array.from(document.querySelectorAll("#black-pawn"));

const bPawn = () => {
    for (i = 0; i < pawns.length; i++){
        pawns[i].innerHTML = "&#9823";
    }
}


let change = figure => {
    if(figure === bRock1) {
        bRock1.innerHTML = "&#9820";
    } else if (figure === bRock2) {
        bRock2.innerHTML = "&#9820";
    } else if (figure === bKnight1) {
        bKnight1.innerHTML = "&#9822";
    } else if (figure === bKnight2) {
        bKnight2.innerHTML = "&#9822";
    } else if (figure === bBishop1) {
        bBishop1.innerHTML = "&#9821";
    } else if (figure === bBishop2) {
        bBishop2.innerHTML = "&#9821";
    } else if (figure === bQueen) {
        bQueen.innerHTML = "&#9819";
    } else if (figure === bKing) {
        bKing.innerHTML = "&#9818";
    } 
}


document.addEventListener('DOMContentLoaded', () => {
    bRock1.addEventListener('click', () => {
        change(bRock1);
    });
    bRock2.addEventListener('click', () => {
        change(bRock2);
    });
    bKnight1.addEventListener('click', () => {
        change(bKnight1);
    });
    bKnight2.addEventListener('click', () => {
        change(bKnight2);
    });
    bBishop1.addEventListener('click', () => {
        change(bBishop1);
    });
    bBishop2.addEventListener('click', () => {
        change(bBishop2);
    });
    bQueen.addEventListener('click', () => {
        change(bQueen);
    });
    bKing.addEventListener('click', () => {
        change(bKing);
    });
    pawns.addEventListener('click', bPawn());
});
