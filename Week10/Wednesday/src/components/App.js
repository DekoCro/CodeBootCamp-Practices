import React from 'react';
import ReactDOM from 'react-dom';
import Chapter from './chapter/chapter.jsx';


export default class App extends React.Component {
  render() {
    return (
    <>
        <Chapter title="Some weird title." day="wednesday" date="unknown" summary="you need to work on your final project" />
        <Chapter title="Other title" day="friday" date="21st of March" summary="you need to work on your final project" />
        <Chapter title="Best title ever" day="saturday" date="12.04.1994" summary="You are not born yet" />
    </>
    )
  }
}
