window.onload = function () {

    // Check to see if the browser supports the GeoLocation API.
    if (navigator.geolocation) {
        // Get the location
        navigator.geolocation.watchPosition(function (position, updatePos) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            // Refresh the position
            var updatePos =    {
                timeout: 1000,
                enableHighAccuracy: true,
                maximumAge: Infinity
            } 

            // Show the map
            showMap(lat, lon);
        });
    } else {
        // Print out a message to the user.
        document.write('Your browser does not support GeoLocation :(');
    }



}

// Show the user's position on a Google map.
function showMap(lat, lon) {
	// Create a LatLng object with the GPS coordinates.
	var myLatLng = new google.maps.LatLng(lat, lon);

	// Create the Map Options
  var mapOptions = {
    zoom: 19,
    center: myLatLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP,

    // Pokemon go theme styling
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

  // Generate the Map
  var map = new google.maps.Map(document.querySelector('.map'), mapOptions);

  var cluster = {
    url: "m3.png", // url
    scaledSize: new google.maps.Size(50, 50), // scaled size
    origin: new google.maps.Point(0, 0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
  };


  // Add a Marker to the Map(Our marker)
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'John Doe!',
      icon: cluster
  });


  // Object holding the coints lat and lng

/*   var places = [
    {
      lat: 59.314951,
      lng: 18.115454
    },
    {
      lat: 59.311710,
      lng: 18.110991
    },
		{
      lat: 59.311973,
      lng: 18.104467
    },
		{
      lat: 59.313309,
      lng: 18.107815
    },
		{
      lat: 59.312936,
      lng: 18.112192
    },
		{
      lat: 59.313453,
      lng: 18.110635
    },

  ]
 */




/*   places.forEach(function (place) {

    // Custom marker
    var icon = {
      url: "coints.png", // url
      scaledSize: new google.maps.Size(50, 50), // scaled size
      origin: new google.maps.Point(0, 0), // origin
      anchor: new google.maps.Point(0, 0) // anchor
    };


    var coinMarker = new google.maps.Marker({
      // position: { lat: 59.312584, lng: 18.108769 },

      position: { lat: place.lat, lng: place.lng },
      map: map,
      icon: icon
    });
  }) */


      // Coin 1
      var icon1 = {
        url: "coints.png", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var coin1 = new google.maps.Marker({
         position: 
         { lat: 59.313453, 
           lng: 18.110636 
         },
        map: map,
        icon: icon1
      });

      // Coin 2
      var icon2 = {
        url: "coints.png", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var coin2 = new google.maps.Marker({
         position: 
         { lat: 59.311710, 
           lng: 18.110991 
         },
        map: map,
        icon: icon2
      });

      
      // Coin 3
      var icon3 = {
        url: "coints.png", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var coin3 = new google.maps.Marker({
         position: 
         { lat: 59.311973, 
           lng: 18.104467
         },
        map: map,
        icon: icon3
      });

      // Coin 4
      var icon4 = {
        url: "coints.png", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var coin4 = new google.maps.Marker({
         position: 
         { lat: 59.313309, 
           lng: 18.107815
         },
        map: map,
        icon: icon4
      });

      

  
      // Coin 5
      var icon5 = {
        url: "treasure.png", // url
        scaledSize: new google.maps.Size(50, 50), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var coin5 = new google.maps.Marker({
         position: 
         { lat: 59.312936, 
           lng: 18.112192
         },
        map: map,
        title: 'Bonus!',
        icon: icon5
      });


      //  Player 1
      var player1 = {
        url: "red_MarkerB.png", // url
        scaledSize: new google.maps.Size(35, 35), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var red = new google.maps.Marker({
         position: 
         { lat: 59.311916, 
           lng: 18.106931
         },
        map: map,
        icon: player1
      });

      // Adding click player 1
      red.addListener('click', function() {
        infowindow1.open(map, red);
      });



      var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h6 id="firstHeading" class="firstHeading">Player 1</h6>'+
            '<div id="bodyContent">'+
            '<p>50%</p>'+
            '</div>'+
            '</div>';

            var infowindow1 = new google.maps.InfoWindow({
                content: contentString
              });
        
      
      //  Player 2
      var player2 = {
        url: "blue_MarkerB.png", // url
        scaledSize: new google.maps.Size(35, 35), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var blue = new google.maps.Marker({
         position: 
         { lat: 59.310835, 
           lng: 18.111214
         },
        map: map,
        icon: player2
      });

      // Adding click player 2
      blue.addListener('click', function() {
        infowindow2.open(map, blue);
      });



      var contentString2 = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h6 id="firstHeading" class="firstHeading">Player 2</h6>'+
            '<div id="bodyContent">'+
            '<p>10%</p>'+
            '</div>'+
            '</div>';

            var infowindow2 = new google.maps.InfoWindow({
                content: contentString2
              });
        
      
      //  Player 3
      var player3 = {
        url: "yellow_MarkerA.png", // url
        scaledSize: new google.maps.Size(30, 30), // scaled size
        origin: new google.maps.Point(0, 0), // origin
        anchor: new google.maps.Point(0, 0) // anchor
      };

   
  
  
      var yellow = new google.maps.Marker({
         position: 
         { lat: 59.313271, 
           lng: 18.116192
         },
        map: map,
        icon: player3
      });

      // Adding click player 3
      yellow.addListener('click', function() {
        infowindow3.open(map, yellow);
      });



      var contentString3 = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h6 id="firstHeading" class="firstHeading">Player 3</h6>'+
            '<div id="bodyContent">'+
            '<p>35%</p>'+
            '</div>'+
            '</div>';

            var infowindow3 = new google.maps.InfoWindow({
                content: contentString3
              });
        
      

  
      
      

 
      
      //console.log(coinMarker.position.lat());


      // Parse the coint position!
/*         parseInt(coinMarker.position.lat())
        parseInt(coinMarker.position.lng())

        parseInt(lat)
        parseInt(lon)

        console.log(parseInt(coinMarker.position.lat()))
        
        console.log(parseInt(coinMarker.position.lng()))
     
        console.log(parseInt(lat))

        console.log(parseInt(lon)) */

        //console.log(lat);
        //console.log(coinMarker.position.lat())
        //console.log(lon);
        //console.log(coin1.position.lng())

      
      // remove marker coin 1
      if(lat === coin1.position.lat() && lon === coin1.position.lng()) {
      
        delete icon1.url;
        delete coin1.position;
        alert("You have found a coin!");
      }

      // coin2
      if(lat === coin2.position.lat() && lon === coin2.position.lng()) {
      
        delete icon2.url;
        delete coin2.position;
        alert("You have found a coin!");
      }

      // coin3
      if(lat === coin3.position.lat() && lon === coin3.position.lng()) {
      
        delete icon3.url;
        delete coin3.position;
        alert("You have found a coin!");
      }

      // coin4
      if(lat === coin4.position.lat() && lon === coin4.position.lng()) {
      
        delete icon4.url;
        delete coin4.position;
        alert("You have found a coin!");
      }

      // coin5
      if(lat === coin5.position.lat() && lon === coin5.position.lng()) {
      
        delete icon5.url;
        delete coin5.position;
        alert("You have found a coin!");
      }
}


// Map timer
function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 20);
  
  
    return {
      'total': t,
      'minutes': minutes,
      'seconds': seconds
    };
  }
  
  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var minutesSpan = clock.querySelector('.minutes');
    var secondsSpan = clock.querySelector('.seconds');
  
    function updateClock() {
      var t = getTimeRemaining(endtime);
      minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
      secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
  
      if (t.total <= 0) {
        clearInterval(timeinterval);
      }
    }
  
    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }
  
  var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
  initializeClock('clockdiv', deadline);
