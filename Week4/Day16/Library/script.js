class Library {
constructor(name, author, year, pages, canIBorrow, avaliable) {
    this.name = name,
    this.author = author,
    this.year = year,
    this.pages = pages,
    this.canIBorrow = canIBorrow,
    this.avaliable = avaliable 
    }

    mount(parent) {
        parent.appendChild(this.displayProducts());
    }

    update () {
        this.container.querySelector(".books");
    }

    displayProducts () {
        this.container = document.createElement('div');
        this.container.className = "books";
        this.container.innerHTML = (`
        <img src="img/book-cover-flyer-template-6bd8f9188465e443a5e161a7d0b3cf33.jpg">
        <h1>${this.name}</h1>
        <h2>${this.author}</h2>
        <h3>Release year: ${this.year}</h3>
        <h3>${this.pages} pages</h3>
        <h4>${this.canIBorrow}</h4>
        <h4>${this.avaliable}</h4>
            `)
        return this.container;
    };
}


const listOfBooks = [
    new Library('Angels&Demons', 'Dan Brown','2000', '534', "Can be borrowed", "Avaliable now"),
    new Library('Our Mutal Friend', 'Charles Dickins','2009', '430', "Can be borrowed", "Not avaliable at the moment"),
    new Library('Catch-22', 'Joseph Heller','2011', '786', "Can be borrowed", "Avaliable now"),
    new Library('Ressurection', 'Leo Tolstoy','1899', '483', "Cannot be bowored", "Avaliable to read here"),
    new Library('Slaughterhouse 5', 'Kurt Vonnegut','2018', '612', "Cannot be borowed", "Not avaliable at the moment"),
    new Library('The Magic Toyshop', 'Angela Carter','1981', '335', "Can be borrowed", "Not avaliable at the moment"),
    new Library('A Fine Balance', 'Rohinton Mistry','2006', '1156', "Cannot be borrowed", "Avaliable now"),
];

const array = [{ 
    name: "",
    author: "",
    year: "",
    pages: "",
    canIBorrow: "",
    avaliable: ""
}];


let aaa = () => {
    let newName = document.querySelector("#name").value;
    let newAuthor = document.querySelector('#author').value;
    let newYear = document.querySelector('#year').value;
    let newPages = document.querySelector('#pages').value;
    let newCanIBorrw = document.querySelector('#canIBorrow').value;
    let newAvaliable = document.querySelector('#avaliable').value;

    array.push({name: newName});
    array.push({author: newAuthor});
    array.push({year: newYear});
    array.push({pages: newPages});
    array.push({canIBorrow: newCanIBorrw});
    array.push({avaliable: newAvaliable});

    listOfBooks.prototype.push(array[0]);

    document.querySelector("#name").value = "";
    document.querySelector("#author").value = "";
    document.querySelector("#year").value = "";
    document.querySelector("#pages").value = "";
    document.querySelector("#canIBorrow").value = "";
    document.querySelector("#avaliable").value = "";
};

document.addEventListener('DOMContentLoaded', () => {
    for(let item of listOfBooks) {
        item.mount(document.querySelector(".library"));
    }
    let btn = document.querySelector("#button");
    btn.addEventListener('click', aaa);
});




