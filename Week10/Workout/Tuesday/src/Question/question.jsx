import './question.css';
import React from 'react';

export default class Question extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      correct: null,
      respond: ''
    }
  }
  handleYes() {
   if(this.props.correct === 'yes') {
     this.setState({
      respond: 'Correct!'
     }) 
   } else {
    this.setState({
      respond: 'Wrong!'
     }) 
   }
  }
  handleNo() {
    if(this.props.correct === 'no') {
      this.setState({
        respond: 'Correct'
       }) 
    } else {
      this.setState({
        respond: 'Wrong!'
       })
    }
  }

  render() {
      return (
          <div className="question">
              <p className="correct">{this.props.correct}</p>
              <div className="text"><span className="number">{this.props.number}. </span>{this.props.text}</div>
              <h4 className="respond">{this.state.respond}</h4>
              <button onClick={this.handleYes.bind(this)}  >YES</button>
              <button onClick={this.handleNo.bind(this)}  >NO</button>
          </div>
      );
  }
}
