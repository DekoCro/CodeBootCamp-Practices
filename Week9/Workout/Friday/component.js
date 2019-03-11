class Slider {
    constructor(color, size) {
        this.color = color;
        this.size = size;
        this.position = 0
    }

    render() {
        this.element = document.createElement('div');
        this.element.className = 'slider';
        this.element.style.backgroundColor = this.color;
        this.element.style.width = this.size + "px";
        this.element.innerHTML = `
        <div class="circle"></div>
        <p id="value">${this.position}</p>
        `;

        this.element.addEventListener('click' , this.moveElement.bind(this));

        return this.element;
    }

    mount(parent) {
        parent.appendChild(this.render());
    }

    

    moveElement(val) {
        this.position = val.clientX;
        console.log(this.left)
        this.update();
    }
    
    update() {
        let circle = this.element.querySelector('.circle');
        let value = this.element.querySelector('#value');
        circle.style.left = this.position + 'px';
        value.innerHTML = this.position;
        
    }  
}