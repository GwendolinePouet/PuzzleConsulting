$(window).load(init);

function init() {
    map();
}



function map(){
    L.mapbox.accessToken = 'pk.eyJ1IjoianVhbjE0IiwiYSI6ImNpcGNsOXhoMjAwMzJ1dG5uZ2ppNXpnNTkifQ.mwz4DJGGDIJ2jTippWxaOg';
    var map = L.mapbox.map('map', 'mapbox.streets')
        .setView([48.856682, 2.373062], 13);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.37144,
                48.85657,
            ]
        },
        properties: {
            title: 'Puzzle',
            description: '',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);
}

