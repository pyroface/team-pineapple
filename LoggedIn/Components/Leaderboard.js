import React from 'react';
import ReactDOM from 'react-dom';

export default class Leaderboard extends React.Component {
    render() {
        return (
            <section id="leaderboard-section" className="index__profile vh-100  leader-cover p-0">
                <div className="transparent pt-4">
                <img src="../../img/trophy.png" alt="game-avatar" className=" rounded mx-auto d-block h-25 bg-dark rounded-circle" />
                    <h1 className="text-warning text-center title">Leaderboard</h1>

                    <div className= "container">
                        <table className="table bg-white w-75 mt-5 mx-auto rounded">
                        <thead class="thead-dark rounded">
                                <tr>
                                <th className="title text-warning" scope="col">Username</th>
                                <th className="title text-warning" scope="col">Score</th>      
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </section>
        );
    }
}


