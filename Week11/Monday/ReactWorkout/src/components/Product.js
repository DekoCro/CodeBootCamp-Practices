import React from 'react';

const Product = props => {
    
    return (
        <div className="product" key={props.id}>
            <img src={props.img_url} alt={props.name} />
            <div className="name">{props.name}</div>

            <button
                onClick={ () => props.addToBasketClick(props.id)}
            >Add to basket</button>
        </div>
    )
}
export default Product;
