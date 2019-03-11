import React from 'react';
import ReactDOM from 'react-dom';
import Message from './message.jsx';
import './index.html';

class App extends React.Component {
    render() {
        return (
            <>
                <Message title="Moj naslov" text="Hello people"/>
                <Message title="Moj tilte" text="Hello kuba"/>
                <Message title="Moj bitle" text="Hello igor"/>
                <Message title="Moj zitle" text="Hello bohdan"/>
            </>
        );
    }
}

ReactDOM.render(<App />, document.querySelector('#app'));

