import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import UserDetails from "@/Components/UserDetails";

export default function Counter() {
    return (
            <div className="container">
                <p>Counter Component</p>
            </div>
        )
}

if (document.getElementById('counter')) {
    ReactDOM.render(<Counter />, document.getElementById('counter'));
}
