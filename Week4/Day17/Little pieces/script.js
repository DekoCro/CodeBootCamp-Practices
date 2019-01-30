class Product {
    constructor(name, price, quantity) {
        this.name = name,
        this.price = price,
        this.quantity = quantity 
    }
    sell () {
        if(this.quantity > 0) {
        this.quantity --;
        this.upadate();
        }
    }
    store(count) {
        this.quantity += count;
    }

    upadate () {
        this.container.querySelector("h4").textContent = "Avaliable: " + this.quantity;
    }
    mount(parent) {
        parent.appendChild(this.displayProducts());
    }

    displayProducts () {
        this.container = document.createElement('div');
        this.container.className = "container";
        this.container.innerHTML = (`
            <div class="product">
                <h2>${this.name}</h2>
                <h3>Price: ${this.price}</h3>
                <h4>Avaliable: ${this.quantity}</h4>
                <button class="sell">Buy</button>
             </div>`)

        const sellBtn = this.container.querySelector(".sell");
        sellBtn.addEventListener('click', () => {
        this.sell();
        });
  
        return this.container;
    }  
}

const listOfProducts = [
    new Product('Razor blade', '2.99€','226'),
    new Product('Shampoo', '6.99€','167'),
    new Product('Towel', '5.99€','97'),
    new Product('Mirror', '49.99€','4'),
    new Product('MakeUp', '9.99€','112'),
    new Product('Shaving foam', '7.99€','81'),
    new Product('Carpet', '36.99€','15')
];

document.addEventListener('DOMContentLoaded', () => {
    for(let item of listOfProducts) {
        item.mount(document.querySelector(".main"));
    }
});


