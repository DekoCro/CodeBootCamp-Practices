import React, { Component } from 'react';
import Question from '../Question/question.jsx';

export default class App extends Component {
    constructor(props) {
        super(props)

        this.state = {
            display: "1",
        }
    }
    displayQuestion(event) {
        this.setState({
            display: event.target.value
        })
    }

    render() {
        let question = null;
        switch(this.state.display) {
            case "1":
            question = <Question number="1" text="How are you today?" correct="no"/>;
            break;
            case "2":
            question = <Question number="2" text="How do you feel?" correct="yes" />;
            break;
            case "3":
            question = <Question number="3" text="How old are you?" correct="yes" />;
            break;
            case "4":
            question = <Question number="4" text="Do you love tea?" correct="no"/>;
            break;
        }
        return (
            <div>
                <header>
                    <button value="1" onClick={this.displayQuestion.bind(this)}>Question 1</button>
                    <button value="2" onClick={this.displayQuestion.bind(this)}>Question 2</button>
                    <button value="3" onClick={this.displayQuestion.bind(this)}>Question 3</button>
                    <button value="4" onClick={this.displayQuestion.bind(this)}>Question 4</button>
                </header>
                {question}
            </div>
        )
    }
}