import React, { Component } from 'react';
import Question from '../Question/question.jsx';

export default class App extends Component {
    render() {
        return (
            <div>
                <Question number="1" text="How are you today?" />
                <Question number="2" text="How do you feel?" />
                <Question number="3" text="How old are you?" />
            </div>
        )
    }
}