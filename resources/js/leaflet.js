import 'leaflet/dist/leaflet.css';
import 'leaflet-geosearch/dist/geosearch.css';

import * as leaflet from 'leaflet';
import * as GeoSearch from 'leaflet-geosearch';

window.L = leaflet

const map = L.map('map').setView([51.505, -0.09], 13);
L.tileLayer('//{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

const search = new GeoSearch.GeoSearchControl({
    provider: new GeoSearch.OpenStreetMapProvider(),
});
map.addControl(search);

let lat = "";
let lng = "";

map.on("click", function (event) {
    lat = event.latlng.lat;
    lng = event.latlng.lng;
});

function submitData(e) {
    e.preventDefault();

    document.getElementById('lat').value = lat
    document.getElementById('lng').value = lng

    document.getElementById('map-form').removeEventListener('submit', submitData);
    document.getElementById('map-form').submit();
}

const form = document.getElementById('map-form');
form.addEventListener('submit', submitData);
