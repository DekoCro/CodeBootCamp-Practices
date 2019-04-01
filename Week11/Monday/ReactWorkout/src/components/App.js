import React from 'react';
import Header from './Header';
import Footer from './Footer';
import ProductList from './ProductList';

export default class App extends React.Component {
    render() {
        return (
            <div id="page">
                <Header />
                <div id="main">  
                    <div className="content">
                        <h1>Products</h1>
                        <ProductList />
                    </div>
                </div>
            <Footer />
        </div>
        )
    }
}