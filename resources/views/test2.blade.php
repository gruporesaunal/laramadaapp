<!DOCTYPE html>
<html>
<head>
<meta name="viewport"></meta>
<title>Mapa proyecto TPI - Google Fusion Tables</title>
<style type="text/css">
html, body, #googft-mapCanvas {
  height: 300px;
  margin: 0;
  padding: 0;
  width: 500px;
}
#googft-legend{background-color:#fff;border:1px solid #000;font-family:Arial,sans-serif;font-size:12px;margin:5px;padding:10px 10px 8px}#googft-legend p{font-weight:bold;margin-top:0}#googft-legend div{margin-bottom:5px}.googft-legend-swatch{border:1px solid;float:left;height:12px;margin-right:8px;width:20px}.googft-legend-range{margin-left:0}.googft-dot-icon{margin-right:8px}.googft-paddle-icon{height:24px;left:-8px;margin-right:-8px;position:relative;vertical-align:middle;width:24px}.googft-legend-source{margin-bottom:0;margin-top:8px}.googft-legend-source a{color:#666;font-size:11px}
</style>

<script type="text/javascript" src="https://maps.google.com/maps/api/js?v=3"></script>

<script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    mapDiv.style.width = isMobile ? '100%' : '500px';
    mapDiv.style.height = isMobile ? '100%' : '300px';
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(4.717019363797066, -74.17759681207275),
      zoom: 13,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(document.getElementById('googft-legend-open'));
    map.controls[google.maps.ControlPosition.LEFT_BOTTOM].push(document.getElementById('googft-legend'));

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col2",
        from: "1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 2
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.onclick = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.onclick = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
  <div id="googft-mapCanvas"></div>
  <input id="googft-legend-open" style="display:none" type="button" value="Legend"></input>
  <div id="googft-legend">
    <p id="googft-legend-title">Acetaminophen</p>
    <div>
      <img class="googft-paddle-icon" src="http://maps.google.com/mapfiles/ms/micons/blue-dot.png"/>
      <span class="googft-legend-range">0 to 30</span>
    </div>
    <div>
      <img class="googft-paddle-icon" src="http://maps.google.com/mapfiles/ms/micons/yellow-dot.png"/>
      <span class="googft-legend-range">30 to 45</span>
    </div>
    <div>
      <img class="googft-paddle-icon" src="http://maps.google.com/mapfiles/ms/micons/green-dot.png"/>
      <span class="googft-legend-range">45 to 759</span>
    </div>
    <div>
      <img class="googft-paddle-icon" src="http://maps.google.com/mapfiles/ms/micons/red-dot.png"/>
      <span class="googft-legend-range">759 to 1,012</span>
    </div>
    <div class="googft-legend-source">
      <a href="data?docid=1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l" target="_blank">Muestreo propio </a>
    </div>
    <input id="googft-legend-close" style="display:none" type="button" value="Hide"></input>
  </div>

</body>
</html>