let design = document.querySelector(".top-left");
let build = document.querySelector(".middle-left");
let create = document.querySelector(".middle-right");
let nature = document.querySelector(".bottom-right");

let clickStatus = 1;

document.addEventListener('DOMContentLoaded', () => {
    design.addEventListener('click', () => {
        if (clickStatus === 1) {
            design.innerHTML = "A design process may include a series of steps followed by designers. ";
            design.style.fontSize = "1.2rem";
            clickStatus = 2;
        } else if (clickStatus === 2) {
            design.innerHTML = "Depending on the product or service, some of these stages may be irrelevant, ignored in real-world situations in order to save time, reduce cost, or because they may be redundant in the situation."
            design.style.fontSize = "1.2rem";
            clickStatus = 3;
        } else if (clickStatus === 3) {
            design.innerHTML = "DESIGN";
            design.style.fontSize = "2rem";
            clickStatus = 1;
        }
    });
    build.addEventListener('click', () => {
        if (clickStatus === 1) {
            build.innerHTML = "Construction starts with planning, design, and financing and continues until the structure is ready for occupancy.  ";
            build.style.fontSize = "1.2rem";
            clickStatus = 2;
        } else if (clickStatus === 2) {
            build.innerHTML = "Far from being a single activity, large scale construction is a feat of human multitasking."
            build.style.fontSize = "1.2rem";
            clickStatus = 3;
        } else if (clickStatus === 3 ){
            build.innerHTML = "The job is managed by a project manager, and supervised by a construction manager, design engineer or construction engineer.";
            build.style.fontSize = "1.2rem";
            clickStatus = 4;
        } else {
            build.innerHTML = "BUILD";
            build.style.fontSize = "2rem";
            clickStatus = 1;
        }
    });
});


