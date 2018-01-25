window.onload = function() {

	// Check to see if the browser supports the GeoLocation API.
	if (navigator.geolocation) {
		// Get the location
		navigator.geolocation.getCurrentPosition(function(position) {
			var lat = position.coords.latitude;
			var lon = position.coords.longitude;

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
    zoom: 17,
    center: myLatLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };

  // Generate the Map
  var map = new google.maps.Map(document.querySelector('.map'), mapOptions);

  // Add a Marker to the Map
  var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Found you!'
  });

// Skriv om koden med lat och lng 
  // var places = [
  //   [59.314951, 18.115454],
  //   [59.311710, 18.110991],
  //   [59.311973, 18.104467],
  //   [59.313309, 18.107815],
  //   [59.312936, 18.112192]
  // ];

  var places = [
    {
      lat: 59.314951,
      lng: 18.115454
    },
    {
      lat: 59.311710,
      lng: 18.110991
    }, 
  ]





  places.forEach(function (place) {

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
  })






/*  // Custom marker 
 var icon = {
  url: "coints.png", // url
  scaledSize: new google.maps.Size(50, 50), // scaled size
  origin: new google.maps.Point(0,0), // origin
  anchor: new google.maps.Point(0, 0) // anchor
};


  var coinMarker = new google.maps.Marker({
    position: {lat: 59.312584, lng: 18.108769},
    map: map,
    icon: icon
  }); */
}