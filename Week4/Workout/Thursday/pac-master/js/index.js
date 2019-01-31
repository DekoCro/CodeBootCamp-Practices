
let field = new Field(12, 6);
let player1 = new Pacman(0, 'open', 'right', 0, field, "Andelko", "boy", "light");
let player2 = new Pacman(2, 'closed', 'left', 5, field, "Marko", "girl", "medium");
let player3 = new Pacman(4, 'open', 'up', 1, field, "Alex", "girl", "dark");
let player4 = new Pacman(6, 'closed', 'down', 3, field, "Igor", "boy", "dark");
let player5 = new Pacman(8, 'open', 'right', 6, field, "Marta", "girl", "light");
let player6 = new Pacman(10, 'closed', 'left', 4, field, "Jakub", "boy", "medium");

//xPos += GRID_SIZE;
// or
//xPos = 1;
// or
//xPos++;

document.addEventListener('DOMContentLoaded', () => {
  field.mount(document.body);
  player1.mount(document.querySelector('.field'));
  player1.update();
  player2.mount(document.querySelector('.field'));
  player2.update();
  player3.mount(document.querySelector('.field'));
  player3.update();
  player4.mount(document.querySelector('.field'));
  player4.update();
  player5.mount(document.querySelector('.field'));
  player5.update();
  player6.mount(document.querySelector('.field'));
  player6.update();

});

