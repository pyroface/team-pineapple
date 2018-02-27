import React from 'react';
import ReactDOM from 'react-dom';

export default class Game extends React.Component {
    render() {
        return (
            <section id="game-section" className="index__map col-12 p-2 map">
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2zN8wobSAuw_ejpGz9ll31ZMQL-iV7JE&libraries=geometry" type="text/javascript"></script>
                <script src="../js/app_js.js">
                </script>
            </section>
        );
    }
}


