class Pacman {
    constructor(xPos, mouth, facing, yPos, field, name, gender, skin) {
      this.xPos = xPos;
      this.mouth = mouth;
      this.facing = facing;
      this.yPos = yPos;
      this.field = field;
      this.name = name;
      this.gender = gender;
      this.skin = skin;
    }
  
    update () {
      let pacman = document.querySelector(".pac");
      if (this.mouth === 'open') {
        pacman.style.backgroundPositionX = 0;
      } else {
        pacman.style.backgroundPositionX = GRID_SIZE + "px";
      }

      switch(this.facing) {
          case "right":
          pacman.style.backgroundPositionY = 0;
          break;
          case "left":
          pacman.style.backgroundPositionY = - GRID_SIZE + "px";
          break;
          case "up":
          pacman.style.backgroundPositionY = - (GRID_SIZE * 3) + "px";
          break;
          case "down":
          pacman.style.backgroundPositionY = - (GRID_SIZE * 2) + "px";
          break;
      }
      pacman.style.left = this.xPos * GRID_SIZE + 'px';
      pacman.style.top = this.yPos * GRID_SIZE + 'px';

    }
  
    mount(parent) {
      parent.appendChild(this.render());
    }
  
    move(dir) {
      if(this.mouth === 'open') {
         this.mouth = 'close';
      } else {
        this.mouth  = 'open';
      }

      switch(dir){
          case 'right':
          if(this.xPos < this.field.width -1){
          this.xPos++;
         }
          break;
          case 'left':
          if (this.xPos > 0){
          this.xPos--;
          }
          break;
          case 'up':
          if (this.yPos > 0){
          this.yPos--;
          }
          break;
          case 'down':
          if(this.yPos < this.field.height -1){
          this.yPos++;
          }
          break;
      }
      this.facing = dir;
      this.update();
    }
  
  
    render () {
      this.element = document.createElement('div');
      this.element.className = `pac ${this.gender}-active-${this.skin}`
      this.element.innerHTML = (`${this.name}: 0`)
      
      document.addEventListener('keydown', e => {
        switch(e.keyCode) {
          case 39:    //ARROW RIGHT
          this.move('right');
          break;
          case 37:    //ARROW LEFT
          this.move('left');
          break;
          case 38:    //ARROW UP
          this.move('up');
          break;
          case 40:    //ARROW DOWN
          this.move('down');
          break;
        }
      });
  
      return this.element;
  
    }
}



