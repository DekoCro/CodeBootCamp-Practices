import React from 'react';
import './chapter.css';

export default class Chapter extends React.Component {
    constructor(props) {
        super(props)

        this.state = {
            done: false
        }
    }
    handleDone() {
        this.setState({done : true});
    }

    render() {
        const doneClass = this.state.done ? 'done' : 'container';

      return (
        <div className={doneClass}>
            <h1 className="title">{this.props.title}</h1>
            <h2 className="day">{this.props.day}</h2>
            <h2 className="date">{this.props.date}</h2>
            <div className="summary">{this.props.summary}</div>
            <div className="press" onClick={this.handleDone.bind(this)}>COMPLETE THIS!</div>
        </div>
      )
    }
  }