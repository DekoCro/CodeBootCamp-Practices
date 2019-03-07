document.addEventListener('DOMContentLoaded', () => {

    let question1 = new Question('Do you like JavaScript?', 'not answered', 0);
    let question2 = new Question('How are you today?', 'answered', 3);
    let question3 = new Question('Coffee or tea?', 'answered', 22);
    let question4 = new Question('Do you love Prague?', 'not answered', 7);

    let parent = document.querySelector('#parent');

    
    question1.mount(parent);
    question2.mount(parent);
    question3.mount(parent);
    question4.mount(parent);
})