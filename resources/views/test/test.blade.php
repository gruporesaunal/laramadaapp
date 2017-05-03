<html>
  <head>
    <title>Google Fusion Tables API Example</title>
  </head>
  <body>
    <div id="content"></div>
    <script>
    function handler(response) {
      console.log(response.items)
      for (var i = 0; i < response.items.length; i++) {
        var item = response.items[i];   
      
        document.getElementById("content").innerHTML += "<br>" + item.name;

      }
    }
    </script>
    <script src="https://www.googleapis.com/fusiontables/v2/tables/1plsthco6Sv7BSk1BicPmZ3V6qtZvHQ_NbYSlCS9l/columns?callback=handler&key={{config('constants.maps_api_key')}}"></script>
  </body>
</html>