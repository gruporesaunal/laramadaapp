<!DOCTYPE html>
<html>
<head>
  <title> </title>
</head>
<body>

<script type="text/javascript">
var xmlhttp = new XMLHttpRequest();
  //json format data resource url 
  var url = "{{ route('routeName')}}";
  xmlhttp.open("GET", url, true);
  xmlhttp.send();

  xmlhttp.onreadystatechange =   function(response) {
    console.log(response.response);

  };
</script>

</body>
</html>