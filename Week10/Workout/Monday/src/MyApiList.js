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
        .then((data) => {
            console.log(data)
        });
    }

    display(data) {
        let cont = document.querySelector(this.container);
        console.log(cont);
        
    };
}