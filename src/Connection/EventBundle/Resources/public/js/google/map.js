var MAP = {};

MAP = {
    'map'      : false,
    'apiUrl'   : 'https://maps.googleapis.com/maps/api/geocode/json',
    'token'    : 'AIzaSyBAeo5pA8pLChuGPcUiRnqkhn5zXcBTlvo',
    'markers'  : [],
    'zoom'     : 8,
    'options'  : {
        'country'  : '',
        'state'    : '',
        'zipCode'  : ''
    },
    'init': function() {
        lat = $("#connection_eventbundle_event_lat").val();
        lng = $("#connection_eventbundle_event_lng").val();

        var haightAshbury = new google.maps.LatLng(40.7127837, -74.00594130000002);
        var mapOptions = {
            zoom: MAP.zoom,
            center: haightAshbury
        };
        MAP.map = new google.maps.Map(document.getElementById('map_canvas'),
            mapOptions);

        if ( lat.length && lng.length ) {
            MAP.setMarker(new google.maps.LatLng(lat, lng))
        }

        // This event listener will call addMarker() when the map is clicked.
        google.maps.event.addListener(MAP.map, 'click', function(event) {
            MAP.setMarker(event.latLng);
        });

        MAP.listen();
    },
    'setMarker': function(location) {
        MAP.deleteMarkers();
        MAP.setFormCoordinates(location);
        var marker = new google.maps.Marker({
            position: location
        });
        MAP.markers.push(marker);
        MAP.setAllMap(MAP.map);
    },
    'setAllMap': function (map) {
        for (var i = 0; i < MAP.markers.length; i++) {
            MAP.markers[i].setMap(map);
            MAP.map.panTo( MAP.markers[i].position);
            MAP.map.setZoom( MAP.zoom );
        }
    },
    'clearMarkers': function() {
        MAP.setAllMap(null);
    },
    'deleteMarkers': function() {
        MAP.clearMarkers();
        MAP.markers = [];
    },
    'getGeoLoc': function() {
        queryStr = MAP.buildQuery();
        console.log(queryStr);
        if (queryStr) {
            $.get(
                MAP.apiUrl,
                {
                    address: queryStr,
                    key: MAP.token
                },
                function(data) {
                    if ( "OK" == data.status) {
                        console.log(data);
                        mapLocation = data.results[0].geometry.location;
                        MAP.setMarker(new google.maps.LatLng(mapLocation.lat, mapLocation.lng));
                    } else {
                        MAP.deleteMarkers();
                    }
                }
            );
        }
    },
    'listen': function() {
        $("form.gmap")
            .on('change', '#connection_eventbundle_event_country', function() {
                $('#connection_eventbundle_event_state').val('');
                MAP.zoom = 6;
                MAP.setFields();
                MAP.getGeoLoc();
            });

        $("form.gmap")
            .on('change', '#connection_eventbundle_event_state', function() {
                MAP.zoom = 10;
                MAP.setFields();
                MAP.getGeoLoc();
            });
    },
    'setFields': function() {
        MAP.options.country  = $("#connection_eventbundle_event_country option:selected").text().trim();
        MAP.options.state    = $("#connection_eventbundle_event_state option:selected").text().trim();
    },
    'setFormCoordinates': function(location) {
        $("#connection_eventbundle_event_lat").val(location.lat());
        $("#connection_eventbundle_event_lng").val(location.lng());
    },
    'buildQuery': function() {
        var options      = [];
        var queryOptions = "";
        for (var k in MAP.options){
            if (MAP.options.hasOwnProperty(k)) {
                if ( MAP.options[k].length ) {
                    options.push(MAP.options[k]);
                }
            }
        }

        if (options.length) {
            queryOptions = options.join(",");
            return queryOptions;
        }
        return false;
    }
};
google.maps.event.addDomListener(window, 'load', MAP.init());