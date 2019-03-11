document.addEventListener('DOMContentLoaded' , () => {
    let parent = document.querySelector('#parent');
    let slider = new Slider("yellow", 1000);
    let slider1 = new Slider("red", 600);
    let slider2 = new Slider("green", 420);
    let slider3 = new Slider("black", 320);
    let slider4 = new Slider("orange", 700);
    slider.mount(parent);
    slider1.mount(parent);
    slider2.mount(parent);
    slider3.mount(parent);
    slider4.mount(parent);

});