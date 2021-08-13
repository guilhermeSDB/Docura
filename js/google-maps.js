let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -22.122084, lng: -51.388776 },
    zoom: 17,
  });   
}