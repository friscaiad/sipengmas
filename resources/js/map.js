let L = require('leaflet');

let map = L.map('map').setView([-7.275644888212839, 112.7938093406499], 12);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
    tileSize: 512,
    zoomOffset: -1,
}).addTo(map);
let marker = L.marker([-7.275644888212839, 112.7938093406499]).addTo(map);
marker.bindPopup("<b>PENS</b>").openPopup();