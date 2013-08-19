<?php
  $page = "map";
  $title = "Map to MOPCON";
  $og_descr = "MOPCON 2013 will be held at ICCK(International Convention Center Kaohsiung)";
  $page_file = $_SERVER['PHP_SELF'];
?>
<html lang="zh-TW" class="">
  <head>
  <?php include_once("header.php");?>
  <style>
  #all {
      padding: 10px;
  }
  #map-canvas {
      height: 350px;
      margin-bottom:1em;
  }
  #map-canvas img {
      max-width: none; // hack, fix infoWindow glich when using bootstrap and google map together
  }
  </style>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
  <script>
    function initialize()
    {
      var icck = new google.maps.LatLng(22.626197, 120.285605);

      var mapOptions = {
              zoom: 15,
              center: icck,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          };
      var ele = document.getElementById('map-canvas');
      var map = new google.maps.Map(ele, mapOptions);

      new google.maps.Marker({
          'position': icck,
          'map': map,
          'title': "International Convention Center Kaohsiung"
      });
/*
      var infoWindow = new google.maps.InfoWindow();
      infoWindow.setContent("高雄國際會議中心");
      infoWindow.setPosition(icck);
      infoWindow.open(map);
*/


    }

    google.maps.event.addDomListener(window, 'load', initialize);

  </script>


  </head>
  <body data-twttr-rendered="true" data-spy="scroll" data-target=".subnav" data-offset="50">
    <?php include_once("navbar_en.php");?>
    <div class="container" id="all">
      <h1>Where to MOPCON</h1>

      <div class="row">
      <div id="map-canvas" class="span12"></div>
      </div>

      <div class="row">
        <div class="span4">
        <div class="well">
          <p><h3>Venue</h3>
          <h4>International Convention Center Kaohsiung (ICCK)</h4>
          <p>No.274, Zhongzheng 4th Rd., Yancheng Dist., Kaohsiung City 803
          <p><a href="http://www.icck.com.tw/location.asp">ICCK's instruction.</a>
        </div>
        </div>

        <div class="span4">
          <h3>THSR/Train/MRT</h3>
          <ol>
            <li>Take MRT red line at (THSR)Zuoying Station or (Train)Kaohsiung Station.</li>
            <li>Transit to orange line at Formosa Boulevard Station.</li>
            <li>Get off at Yanchengpu station. The venue is 250 meters away from exit No. 2</li>
          </ol>
        </div>

        <div class="span4">
          <h3>Bus</h3>
          <p>Kaohsiung History Museum: 0S(one way only), 0N(one wy only), 11, 25, 33, 56, 60, 76, 77, 82, 建國幹線, 91, 214, 219, 248
        </div>

      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
