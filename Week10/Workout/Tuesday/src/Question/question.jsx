import './question.css';
import React from 'react';

export default class Question extends React.Component {
//   handleClick() {
//     alert(this.props.text);
// }
  render() {
      return (
          <div className="question">
              <div className="number">{this.props.number}</div>
              <div className="text">{this.props.text}</div>
              {/* <button onClick={this.handleClick.bind(this)}>Like</button> */}
          </div>
      );
  }
}

