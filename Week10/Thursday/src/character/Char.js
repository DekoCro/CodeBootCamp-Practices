import React from 'react'

const Char = (props) => {
    let chars = "Loading";
    
    if(props.data) {
        chars = props.data.map(result => 
            <div className="card-body" key={result.id}>
                <h1>{result.name}</h1>
            </div>
            )
    } 
    
    return (
        <div>
        {chars}
        </div>
    )
};

export default Char;