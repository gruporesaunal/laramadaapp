
<!DOCTYPE html>
<!--
  Copyright 2011 Google Inc. All Rights Reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      http://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License.
-->
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">

    <title>Fusion Tables Layer Example: Dynamic Info Windows</title>

    <link href="/apis/fusiontables/docs/samples/style/default.css"
        rel="stylesheet" type="text/css">
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">

      function initialize() {
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: new google.maps.LatLng(37.4, -122.1),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var layer = new google.maps.FusionTablesLayer({
          query: {
            select: 'Acetaminophen',
            from: '1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l'
          },
          map: map
        });

        console.log(layer)

        google.maps.event.addListener(layer, 'click', function(e) {

          // Change the content of the InfoWindow
          e.infoWindowHtml = e.row['Store Name'].value + "<br>";

          // If the delivery == yes, add content to the window
          if (e.row['delivery'].value == 'yes') {
            e.infoWindowHtml += "Delivers!";
          }
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>