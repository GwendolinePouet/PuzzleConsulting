$(window).load(init);

function init() {  // confirmer envoie du mail dans landing page
    map();
//    $('#submit-newsletter').click(function (e) {
//        e.stopPropagation();
//        e.preventDefault();
//
//        // Si le mail est vide
//        //if($("#email").val() == ''){
//        //    $('#email').val('Indiquez-nous votre contact');
//        //}
//        ////else
//        //$('#email').val('Votre contact a bien été enregistré !');
//        //$('#newsletter-form').addClass('send');
//    });

}



function map(){
    L.mapbox.accessToken = 'pk.eyJ1IjoianVhbjE0IiwiYSI6ImNpcGNsOXhoMjAwMzJ1dG5uZ2ppNXpnNTkifQ.mwz4DJGGDIJ2jTippWxaOg';
    var map = L.mapbox.map('map', 'mapbox.streets')
        .setView([48.858565, 2.287198], 13);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.287198,
                48.858565,
            ]
        },
        properties: {
            title: 'Hyfe',
            description: 'Chiffre d\'affaire augmenté de 10%<br />par rapport à l\'année précédente',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.30232,
                48.85794,
            ]
        },
        properties: {
            title: 'Jean-Pierre',
            description: 'A augmenté sa productivité de 15% en 1 an',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                3.297198,
                49.858565,
            ]
        },
        properties: {
            title: 'Wegopafi',
            description: 'Objectif de chiffre d\'affaire<br />atteint en 2 mois',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.32841,
                48.83331,
            ]
        },
        properties: {
            title: 'Poqoma',
            description: 'Augmentation des revenus',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.3885,
                48.86901,
            ]
        },
        properties: {
            title: 'Biffoocoffe',
            description: 'S\'est contruit une véritable clientèle',
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.28962,
                48.89068,
            ]
        },
        properties: {
            title: 'Mr Cruz',
            description: 'A recruté de nouveaux collaborateurs',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);

    L.mapbox.featureLayer({        // Ceci est un marqueur
        // this feature is in the GeoJSON format: see geojson.org
        // for the full specification
        type: 'Feature',
        geometry: {
            type: 'Point',
            // coordinates here are in longitude, latitude order because
            // x, y is the standard for GeoJSON and many formats
            coordinates: [
                2.32962,
                48.87284,
            ]
        },
        properties: {
            title: 'Denneny',
            description: 'A ouvert un deuxième bureau<br />suite à une nette augmentation<br />du nombre de clients',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#3bb2d0',
            'marker-symbol': 'star'
        }
    }).addTo(map);
}

