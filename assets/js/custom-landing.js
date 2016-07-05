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
        .setView([48.857840, 2.335570], 13);

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
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
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
                2.330475,
                48.854491,
            ]
        },
        properties: {
            title: 'Mangafly',
            description: 'Augmentation de la fidélisation client de 20% <br> et note avis client passée de 3.1 à 4.3',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'star'
        }
    }).addTo(map).openPopup();

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
            title: 'WEKIT',
            description: 'Objectif de chiffre d\'affaire annuel<br />atteint en 6 mois',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
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
            description: 'Augmentation de la rentabilité de 18%<br>suite à l\'embauche de 2 nouveaux employés performants',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
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
            title: 'Cofe Store',
            description: 'Taux de satisfaction client <br>passé de 30% à 92%',
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
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
            title: 'ORLIDA',
            description: 'Baisse de 35% des arrêts maladies <br> des employés',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
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
            title: 'Compta +',
            description: 'A ouvert un deuxième bureau<br />suite à une nette augmentation<br />du nombre de clients',
            // one can customize markers by adding simplestyle properties
            // https://www.mapbox.com/guides/an-open-platform/#simplestyle
            'marker-size': 'large',
            'marker-color': '#FF7097',
            'marker-symbol': 'rocket'
        }
    }).addTo(map);
}

$(document).ready(function(){
	$('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 70
        }, 1000);
        return false;
      }
    }
  });
});