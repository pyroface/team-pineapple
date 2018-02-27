import React from 'react';
import ReactDOM from 'react-dom';

import Game from './game'
import Leaderboard from './Leaderboard'
 
 class App extends React.Component {
    render() {
        return (
            <div>
                <Game />
                <Leaderboard />
            </div>
        );
    }
} 








ReactDOM.render(<App />, document.getElementById('main'));


