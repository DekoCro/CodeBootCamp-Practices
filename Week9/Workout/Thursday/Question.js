class Question {

    constructor(text, state, vote) {
        this.text = text;
        this.state = state;
        this.vote = vote;
    }

    render() {
        this.element = document.createElement('div');
        this.element.className = 'question';
        this.element.innerHTML = `
            <h2 class="text">${this.text}</h2>
            <h3 class="state">Status: ${this.state}</h3>
            <h3 id="totalVotes">Upvotes: ${this.vote}</h3>
            <label for="">Vote here:</label>
            <button id="voteDown" class="vote">BAD</button>
            <button id="voteUp" class="vote">GOOD<button>
        `;

        let voteDown = this.element.querySelector('#voteDown');
        let voteUp = this.element.querySelector('#voteUp');

        voteDown.addEventListener('click' , () => {
            this.vote--;
            this.update();
        });
        voteUp.addEventListener('click' , () => {
            this.vote++;
            this.update();
        });


        return this.element;
    }

    mount(parent) {
        parent.appendChild(this.render());
    }

    update() {
        let totalVotes = this.element.querySelector('#totalVotes');

        totalVotes.textContent = 'Upvotes: ' + this.vote; 
        
    }
}