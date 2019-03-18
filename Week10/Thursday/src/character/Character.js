import React, { Component } from 'react';
import axios from 'axios';
import Char from './Char.js';

export default class Character extends Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: []
        }
    }
    componentDidMount() {
        axios.get('https://swapi.co/api')
        .then(response => {
            response.data.map(res => {
                this.setState({items: [...this.state.items, res]})
            })
            console.log(response)
        })
        .catch(error => console.log(error));
        
    }
    render() {
        console.log(this.state.items)
        return (
           <div>
                <Char data={this.state.items}/>
           </div>
        );
    }
}