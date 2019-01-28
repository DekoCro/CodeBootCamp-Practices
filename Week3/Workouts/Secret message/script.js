let secretMessage = document.querySelector("p");
let paddlock = document.querySelector("img");

let reveal = () => {
    secretMessage.innerHTML = "You are perfect.";
    secretMessage.style.color = "orangered";
}
let hide = () => {
    secretMessage.innerHTML = "The oposite of love is not despise, it's not insensibility. The opposite of profession is not ugliness, it's indifference. And the oposite of animation is not decease, it's mediocrity.";
    secretMessage.style.color = "black";
}


document.addEventListener('DOMContentLoaded' , () => {
    paddlock.addEventListener('mouseenter' , reveal);
    paddlock.addEventListener('mouseleave' , hide);
});