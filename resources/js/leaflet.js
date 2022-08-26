import '../../node_modules/leaflet-geosearch/dist/geosearch.css';

import { OpenStreetMapProvider } from 'leaflet-geosearch';
const provider = new OpenStreetMapProvider();
const results =  provider.search({ query: "chennai" })
console.log(results)