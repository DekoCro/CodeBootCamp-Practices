import React from 'react'
import ReactDOM from 'react-dom'

export default class App extends React.Component {
    constructor(props){
        super(props)

        this.state = {
            value: '',
            unit: ''
        }
    }

     units = {
        'length': {
            'm': 1,
            'km': 1000,
            'mi': 1609.344,
            'cm': 0.01, 
            'ft': 0.3048,
            'yd': 0.9144
        }
    }
    findUnitType(unit) {
        for(let type in units) {
            if(typeof(this.units[type][unit] != 'undefined')){
                
            }
        }
    }

    getSIValue(value, unit, type) {

    }

    handleChange(event) {
        this.setState({value: event.target.value});
        this.findValueAndUnitInString(event.target.value);
    }

    findValueAndUnitInString(string) {
        let matches = string.match(/(\d+)([a-z]+)/i);
        if(matches){
            // document.querySelector('.correct').textContent = matches[0];
            this.setState({
                value: matches[1],
                unit: matches[2]
            })
            this.findUnitType(matches[2]);
        } else {
            document.querySelector('.error').textContent = "Please insert the correct value!";
        }
    }

    render() {
        console.log(this.state);
        return (
            <div className="recalculator">
                <h1>THE RECALCULATOR </h1>
                <input type="text" placeholder="ex. 12 m" 
                onChange={this.handleChange.bind(this)}/>
                <h4 className="correct"></h4>
                <h4 className="error"></h4>
            </div>
        )
    }
}