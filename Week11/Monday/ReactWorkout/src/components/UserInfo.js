import React from 'react';

const UserInfo = props => {

    return (
        <div className="user">
            <span>chell@aperture.sc</span><br />
            <a href="#">logout</a>
        </div>
    )
}

export default UserInfo;

export const UserButton = props => {
    return (
        <a href="#">logout</a>
    )
}