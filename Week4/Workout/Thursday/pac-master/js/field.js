const GRID_SIZE = 85;

class Field {
    constructor(width, height) {
        this.width = width;
        this.height = height;
    }

    render () {
        this.field = document.createElement('div');
        this.field.className = "field";
        return this.field;
    }

    size () {
        this.field.style.width = this.width * GRID_SIZE + "px";
        this.field.style.height = this.height * GRID_SIZE + "px";
    }

    mount(parent) {
        parent.appendChild(this.render());
        this.size();
    }
}




