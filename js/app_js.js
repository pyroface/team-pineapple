
const dist = 100;

var updatePos =    {
    timeout: 1000,
    enableHighAccuracy: true,
    maximumAge: Infinity
};

var players = new Array(); // todo players
var coins = new Array();

var currentUser;
var firstPlayer;

const api_url = 'http://localhost:3000/api/'

/*
coins[0] = {lat: 59.313453, lng: 18.110636, value: 100};
coins[1] = {lat: 59.311710, lng: 18.110991, value: 200};
coins[2] = {lat: 59.311973, lng: 18.104467, value: 300};
*/
var cluster = {
    url: "../img/coints.png", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0, 0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
  };

var infos = new Array();
var playerMarker;
var coinMarkers = new Array();


function startMap () {
    
        const url = api_url + "coins"
    fetch(url).then(function(res) {
    return res.json();
    }).then(function(data){
        coins = data.coins;
        var myPos = navigator.geolocation.getCurrentPosition(initMap);
    });
    
    
}


function user() {
    let params = (new URL(location)).searchParams;
    currentUser = params.get('currentUser'); // 
    console.log(currentUser); // currentUser ska vara userID i backend


    const urlUser = 'http://localhost:3000/api/users/' + currentUser; 
    fetch(urlUser)
        .then(function (response) {
            if (response.ok) {
                response.json()
                    .then(function (json) {
                        const Userid= json.Users;

                        Userid.forEach((player) => {
                            firstPlayer= {PlayerID: player.ID, PlayerName: player.Username, PlayerScore: player.Score };
                            console.log(firstPlayer);
                        });
                    });
            } else {
                console.log('Network request for products.json failed with response ');
            }
       });
}
user();

function initMap (myPos) {
    console.log(myPos);
var MapCenter = new google.maps.LatLng(myPos.coords.latitude, myPos.coords.longitude);
var MapZoom = 16;
var MapZoomMax = 24;
var MapZoomMin = 6;

var mapOptions = { 
    center: MapCenter, 
    zoom: MapZoom,
    //The type of map. In addition to ROADMAP, the other 'premade' map styles are SATELLITE, TERRAIN and HYBRID. 
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    maxZoom:MapZoomMax,
    minZoom:MapZoomMin,
    //Turn off the map controls as we will be adding our own later.
    panControl: false,
    mapTypeControl: false,
    styles:[
        {
            "featureType": "administrative",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                },
                {
                    "weight": "2.29"
                }
            ]
        },
        {
            "featureType": "administrative.land_parcel",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#a1f199"
                }
            ]
        },
        {
            "featureType": "landscape.man_made",
            "elementType": "labels.text",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "hue": "#ff0000"
                }
            ]
        },
        {
            "featureType": "landscape.natural.landcover",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#37bda2"
                }
            ]
        },
        {
            "featureType": "landscape.natural.terrain",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#37bda2"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#afa0a0"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                }
            ]
        },
        {
            "featureType": "poi.attraction",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "poi.business",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.business",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#e4dfd9"
                }
            ]
        },
        {
            "featureType": "poi.business",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.government",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.medical",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.park",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#37bda2"
                }
            ]
        },
        {
            "featureType": "poi.place_of_worship",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.school",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi.sports_complex",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#84b09e"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#fafeb8"
                },
                {
                    "weight": "1.25"
                },
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#f1ffb8"
                },
                {
                    "weight": "1.48"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#5ddad6"
                }
            ]
        }
    ]
};

map = new google.maps.Map(document.querySelector('.map'), mapOptions);	
runMap(MapCenter);
}

google.maps.event.addDomListener(window, 'load', startMap);
//var myLatlng = {lat: myPos.coords.latitude, lng: myPos.coords.longitude};
function coinMarker() {
    for (var i = 0; i < coins.length; i++) {
        coinMarkers[i] = new google.maps.Marker({
            position: new google.maps.LatLng(coins[i].lat, coins[i].lng),
            map: map,
            title: 'Coin: ' + i,
            icon: cluster,
            my_id: i,
            my_value: coins[i].value
          });


    }

}









function runGame(pos) {
/*     var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
    '<div id="bodyContent">'+
    '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
    'sandstone rock formation in the southern part of the '+
    'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
    'south west of the nearest large town, Alice Springs; 450&#160;km '+
    '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
    'features of the Uluru - Kata Tjuta National Park. Uluru is '+
    'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
    'Aboriginal people of the area. It has many springs, waterholes, '+
    'rock caves and ancient paintings. Uluru is listed as a World '+
    'Heritage Site.</p>'+
    '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
    'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
    '(last visited June 22, 2009).</p>'+
    '</div>'+
    '</div>'; */
    

   
    playerMarker.setPosition(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
    for (var i = 0; i < coinMarkers.length; i++) {
        var close = google.maps.geometry.spherical.computeDistanceBetween (new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude), coinMarkers[i].getPosition());
        //console.log("i: " + i + "close: " + close);
        if (close <= dist && coinMarkers[i].my_value) {
            // player is near coin!
  
            var contentString = `
            <div id="content">
            <div id="siteNotice">
            <h1 id="firstHeading" class="firstHeading">You got ${coinMarkers[i].my_value}💰</h1>
            </div>
            </div>;
            `;
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            coinMarkers[i].setMap(null);
            infowindow.open(map, playerMarker);
            console.log("Player " + firstPlayer + "got " + coinMarkers[i].my_value + " more coins!");
            var data = {value: coinMarkers[i].my_value, playerid: firstPlayer.PlayerID};
            coinMarkers[i].my_value = 0;
            console.log(data);
            
            var request = new Request(api_url + "users", {
                
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json'
                    },
                body: JSON.stringify(data)
           
            });
            fetch(request).then(function(res) { 
                console.log(res.body);
                /* handle response */ 
            });

            console.log("Player is near " + coinMarkers[i].title);
            // TODO POST via Fetch() till API:et

        }
        
    
    }
}


function error () {
    console.log("it borked!");
}

function runMap (MapCenter) {

    playerMarker = new google.maps.Marker({
    position: MapCenter,
    draggable: true,
    animation: google.maps.Animation.DROP,
    map: map,
    title: 'Player 1'
    });
    playerMarker.addListener('click', toggleBounce);
    coinMarker();
    navigator.geolocation.watchPosition(runGame, error, updatePos);

    function toggleBounce() {
        if (playerMarker.getAnimation() !== null) {
            playerMarker.setAnimation(null);
        } else {
            playerMarker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }


//Add listener

    // Center of map
    //map.panTo(new google.maps.LatLng(document.getElementById("lat").value,document.getElementById("long").value));

} //end addListener


