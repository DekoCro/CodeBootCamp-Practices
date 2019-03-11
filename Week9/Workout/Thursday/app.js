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

const processData = (json) => {
    const userEl = document.querySelector('main');
    json.map(question => {
        let div = document.createElement('div');
        div.innerHTML = `
        <hr style="width:100vw">
        <h1>${question.title}</h1>
        <h3>${question.body}</h3>
        <h4>UPVOTES: ${question.upvotes}</h4>
        `;
        return div;
    }).forEach(q => userEl.appendChild(q));
}

fetch('http://bootcamp.podlomar.org/api/questions')
.then(r => r.json())
.then(processData);