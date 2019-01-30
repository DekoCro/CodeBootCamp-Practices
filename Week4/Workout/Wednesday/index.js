let progress = 4;
 
const updateHTML = () => {
  document.querySelector('#counter').innerHTML = progress;
  document.querySelector('#knob').style.width = `${progress*10}%`;
}
 
document.addEventListener('DOMContentLoaded', () => {
  let btnPlus = document.querySelector('#plus');
  btnPlus.addEventListener('click', () => {
    if(progress < 10) { 
      progress++;
      updateHTML();
    }
      
  });
 
  let btnMinus = document.querySelector('#minus');
  btnMinus.addEventListener('click', () => {
    if(progress > 0) {
      progress--;
      updateHTML();
    }
  });
  updateHTML();
});