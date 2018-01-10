function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(59.309233,18.270534),
        zoom:9,
        mapTypeId: google.maps.MapTypeId.ROADMAP
   }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
} 