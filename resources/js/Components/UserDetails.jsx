import React from 'react';

export default function UserDetails({users}) {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Users header</div>
                        <p>{console.log(users)}</p>
                        <ul>

                        </ul>
                        <div className="card-body">Card body</div>
                    </div>
                </div>
            </div>
        </div>
    );
}
