<?php
  $page = "map";
  $title = "交通資訊";
  $og_descr = "今年度擴大於高雄國際會議中心(ICCK)舉辦，歡迎大家蒞臨指教";
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
          'title': "高雄國際會議中心"
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
    <?php include_once("navbar.php");?>
    <div class="container" id="all">
      <h1>會場交通資訊</h1>

      <div class="row">
      <div id="map-canvas" class="span12"></div>
      </div>

      <div class="row">
        <div class="span4">
        <div class="well">
          <p><h3>會場：</h3>
          <h4>高雄國際會議中心ICCK</h4>
          <p>高雄市鹽埕區中正四路274號
          <p><a href="http://www.icck.com.tw/location.asp">ICCK 官方網頁說明</a>
        </div>
        </div>

        <div class="span4">
          <h3>高鐵/火車/捷運</h3>
          <ol>
            <li>左營高鐵站/高雄火車站搭捷運紅線</li>
            <li>至捷運美麗島站換乘橘線往西
            <li>捷運鹽埕埔站下車，二號出口步行約 250 公尺可至會場</li>
          </ol>
        </div>

        <div class="span4">
          <h3>公車</h3>
          <p>歷史博物館0南(單邊停靠)、0北(單邊停靠)、11、25、33、56、60、76、77、82、建國幹線、91、214、219、248
        </div>

      </div>

    </div>
    <?php include_once("footer.html");?>
  </body>
</html>
