let menuItems = ['home', 'blog', 'contact'];
let menuElement = document.querySelector(".menu");

for (let items of menuItems) {
    //menuElement.innerHTML += `<div> + ${items} + </div>`; 
    //menuElement.innerHTML += "<div>" + items + "</div>";
    let newElement = document.createElement('div');
    newElement.textContent = items;
    menuElement.appendChild(newElement);
} 
