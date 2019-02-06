let field = new Field(12, 6);

document.addEventListener('DOMContentLoaded', () => {
  field.mount(document.body);
  let pacSquad = [
    new Pacman(0, 'open', 'right', 0, field, "Andelko", "boy", "light"),
    new Pacman(2, 'closed', 'left', 5, field, "Marko", "girl", "medium"),
    new Pacman(4, 'open', 'up', 1, field, "Alex", "girl", "dark"),
    new Pacman(6, 'closed', 'down', 3, field, "Igor", "boy", "dark"),
    new Pacman(8, 'open', 'right', 6, field, "Marta", "girl", "light"),
    new Pacman(10, 'closed', 'left', 4, field, "Jakub", "boy", "medium")
  ];
  
  for(let pacman of pacSquad) {
    
    pacman.mount(document.querySelector(".field"));
  }
  

});

