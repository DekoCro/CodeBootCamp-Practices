export default class MyApiList {
    constructor(url, container_id) {
        this.url = url;
        this.container_id = container_id;
    }

    load() {
        fetch(this.url, {
            method: 'GET'
        })
        .then(response => response.json())
        .then((data) => this.display(data));
    }

    display(data) {
        let cont = document.querySelector(`#${this.container_id}`);
        let ul = document.createElement('ul');
        cont.appendChild(ul);
        data.forEach(item => {
            ul.innerHTML += `
            <li>${item}</li>
            `

        return ul;
        });
        console.log(data)
    }
}