<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Location Test</title>
</head>
<body>
<!-- Source: https://developers.google.com/maps/documentation/javascript/geolocation -->
<div id="map"></div>

<script>

    function initMap() {

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };

                // Get Positoin Name passing args => pos;
                getAddressName(pos).then(function(result){
                    console.log(result);
                    }).catch(function(ex){
                        console.log(ex);
                });
            });
        } else {
            // Browser doesn't support Geolocation
            console.log("Browser doesn't support Geolocation");
        }
    }


    /**
     * Get GeoLocation Title
     * @param pos
     */
    function getAddressName (pos) {
        return new Promise(function (resolve, reject) {
            var request = new XMLHttpRequest();

            var method = 'GET';
            var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + pos.lat + ',' + pos.lng + '&sensor=true';
            var async = true;

            request.open(method, url, async);
            request.onreadystatechange = function () {
                if (request.readyState == 4) {
                    if (request.status == 200) {
                        var data = JSON.parse(request.responseText);
                        var address = data.results[0];
                        city = address.address_components[1].long_name;
                        //console.log(city);
                        resolve(city);
                    }
                    else {
                        reject(request.status);
                    }
                }
            };
            request.send();
        });
    }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1fcbNH6X_lGnNchC-NqN4sPJWsJvtN0k&callback=initMap">
</script>
</body>
</html>