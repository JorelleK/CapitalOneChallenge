<!DOCTYPE html>
<html lang = "en-US"> 
  <head>
  <script type="text/javascript" src="js/lib/jquery-1.11.1.min.js" ></script>
   <script> 
     $(function(){ $("head").load("header.html") });
   </script>
  <title> My Website </title>
  <!-- link relationship with the css file
  -->
  <link rel ="stylesheet" type="text/css" href="example.css">
  <link rel ="stylesheet" type="text/css" href="c3.css">

  <script type="text/javascript" src="d3.v3.min.js" charset="utf-8" ></script>
  <script src="c3.min.js"></script>

  <!-- Load papaparse.js -->
  <script src="papaparse.js"></script>

  <meta charset="utf-8">
  <meta name="viewpoint"
  content="width=device-width"

  </head>

  <body>
  
  <!--<div id="header">
     <h1> Welcome </h1>
  </div>

  <div id="content">

    <div id="nav">
-->
    
   <h1> Welcome to my page </h1>

   <?php $row = 1; if (($handle = fopen("reviewscore.csv", "r")) !== FALSE) { while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { $num = count($data); echo " ","Record #",$row," "; $row++; for ($recordcount=0; $recordcount < $num; $recordcount++) { echo $data[$recordcount] . " \n"; } } fclose($handle); } ?> 
         
    <script src="create-graph.js"></script>
    


   <!-- Add Google Maps -->
<div id="googleMap" style="height:400px;width:100%;"></div>
<script>
function myMap() {
var myCenter = new google.maps.LatLng(37.70693, -122.365);
var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position:myCenter});
marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
   <!--
  	Link javascipt file
  -->
  <div id="map" style="width:400px;height:400px""> My map </div>
  <script src="example.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
  <ul>
  	<li> My plan 1 </li>
  	<li> My plan 2 </li>
  </ul>

  </body>
</html>