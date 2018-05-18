<?php
include __DIR__.'/src/Savant3.php';

$config = [
    'template_path' => array(__DIR__.'/tpl/')
];  
$tpl = new Savant3($config);

$tpl->title = "交通路線";
$tpl->mainClass = 'location-➫';

$tpl->content =<<<RAW_HTML
		<address>
			高雄國際會議中心ICCK - 高雄市鹽埕區中正四路274號
		</address>
		<div id="map-canvas" class="row"></div>

		<h2>交通方式</h2>
		<div class="row">
			<section class="transportation">
				<h3>高鐵/火車/捷運</h3>
				<ol>
				    <li>左營高鐵站/高雄火車站搭捷運紅線</li>
				    <li>至捷運美麗島站換乘橘線往西子灣方向</li>
				    <li>捷運鹽埕埔站下車，二號出口步行約 250 公尺可至會場</li>
				</ol>
			</section>
			
			<section class="transportation">
				<h3>公車</h3>
				<p>
					歷史博物館0南(單邊停靠)、0北(單邊停靠)、11、25、33、56、60、76、77、82、建國幹線、91、214、219、248
				</p>
			</section>
		</div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
      <script>
        function initialize()
        {
          var styles = [
              {
                  featureType: "all",
                  stylers: [
                    { saturation: 0 },
                    {hue:"#FF6F4D"}
                  ]
                },{
                  featureType: "road.arterial",
                  elementType: "geometry",
                  stylers: [
                    { hue: "#00ffee" },
                    { saturation: 50 }
                  ]
                },{
                  featureType: "poi.business",
                  elementType: "labels",
                  stylers: [
                    { visibility: "off" }
                  ]
                }
               
            ];
          var icck = new google.maps.LatLng(22.626197, 120.285605);
          var styledMap = new google.maps.StyledMapType(styles,{name: "Styled Map"});
          var mapOptions = {
                  zoom: 15,
                  center: icck,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                  mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                      }

              };
          var ele = document.getElementById('map-canvas');
          var map = new google.maps.Map(ele, mapOptions);
          map.mapTypes.set('map_style', styledMap);
            map.setMapTypeId('map_style');
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
RAW_HTML;

// 輸出畫面
$tpl->display('main.tpl.php');
