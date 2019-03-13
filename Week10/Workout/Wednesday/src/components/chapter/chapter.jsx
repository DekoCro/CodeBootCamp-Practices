import React from 'react';

export default class Chapter extends React.Component {
    constructor(props) {
        super(props)


    }
    render() {
      return (
        <>
            <h1 className="title">{}</h1>
            <h2 className="day"></h2>
            <h2 className="date"></h2>
            <div className="summary"></div>
        </>
      )
    }
  }