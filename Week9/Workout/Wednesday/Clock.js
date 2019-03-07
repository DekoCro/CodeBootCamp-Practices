class Clock {
    constructor(hours, minutes, period) {
      this.hours = hours;
      this.minutes = minutes;
      this.period = period;
    }
  
    render() {
      this.element = document.createElement('div');
      this.element.className = 'clock';
      this.element.innerHTML = `
        <div class="control">
          <button id="btn-hours-up" class="digit-btn">+</button>
          <div id="digits-hours" class="digits hours">${this.hours}</div>
          <button id="btn-hours-down" class="digit-btn">-</button>
        </div>
        <div class="separator">:</div>
        <div class="control">
          <button id="btn-minutes-up" class="digit-btn">+</button>
          <div id="digits-minutes" class="digits minutes">${this.minutes}</div>
          <button id="btn-minutes-down" class="digit-btn">-</button>
        </div>
        <div id="countdown" class="seconds"></div>
        <div id="period" class="period">${this.period}</div>
        <progress value="0" max="50" id="progressBar"></progress>
        
      `;
  
      return this.element;
    }
  
    mount(parent) {
      parent.appendChild(this.render());

      let afternoon = false;
      let morning = this.element.querySelector('#period');

      let btnHoursUp = this.element.querySelector('#btn-hours-up');
      btnHoursUp.addEventListener('click', () => {
        if(this.hours < 12){
          this.hours++;
          this.update();
        } else if (this.hours === 12 && afternoon === false) {
          this.hours = 1;
          afternoon = true;
          morning.innerHTML = "PM";
          this.update();
        } else if (this.hours === 12 && afternoon === true) {
          this.hours = 1;
          afternoon = false;
          morning.innerHTML = "AM";
          this.update();
        }
      });

      let btnHoursDown = this.element.querySelector('#btn-hours-down');
      btnHoursDown.addEventListener('click', () => {
        if(this.hours > 1){
          this.hours--;
          this.update();
        } else if (this.hours === 1 || afternoon === false) {
          this.hours = 12;
          afternoon = true;
          morning.innerHTML = "AM";
          this.update();
        } else if (this.hours === 1 || afternoon === true) {
          this.hours = 12;
          afternoon = false;
          morning.innerHTML = "PM";
          this.update();
        }
        });
      let btnMinUp = this.element.querySelector('#btn-minutes-up');
      btnMinUp.addEventListener('click', () => {
        if(this.minutes < 59){
          this.minutes++;
          this.update();
        } else if (this.minutes === 59) {
          this.minutes = 0;
          this.hours++;
          this.update();
        }
      });
      let btnMinDown = this.element.querySelector('#btn-minutes-down');
      btnMinDown.addEventListener('click', () => {
        if(this.minutes > 0){
          this.minutes--;
          this.update();
        } else if (this.minutes === 0) {
          this.minutes = 59;
          this.hours--;
          this.update();
        }
      });

      let timeleft = 50;
      let downloadTimer = setInterval(() => {
        this.element.querySelector("#progressBar").value = 50 - timeleft;
        timeleft -= 1;
        if(timeleft <= 0)
          clearInterval(downloadTimer);
      }, 1000);

      let time = 50;
      let timer = setInterval(() => {
        this.element.querySelector("#countdown").innerHTML = time;
        time -= 1;
        if(time <= 0){
          clearInterval(timer);
          this.element.querySelector("#countdown").innerHTML = "Finished"
        }
      }, 1000);
    }
  
    update() {
      let hoursDigits = this.element.querySelector('#digits-hours');
      let minutesDigits = this.element.querySelector('#digits-minutes');
      let periodElm = this.element.querySelector('#period');
    
      hoursDigits.textContent = this.hours;
      minutesDigits.textContent = this.minutes;
      periodElm.textContent = this.period;
    }
    
}