<p class="anchor"><a href="#mainContenftKey" id="mainContentKey" accesskey="c">主要內容區</a></p>
<div class="article">
	<h2>交通資訊</h2>
	<dl>
		<dt><i class="icon-user">&nbsp;</i> 活動地點：高雄軟體園區A棟頂樓 海景會議廳</dt>
		<dd><i class="icon-road">&nbsp;</i> 地址：高雄市前鎮區復興四路12號1F</dd>
	</dl>
	<div id="map_canvas" style="width:622px; height:462px">Google Maps</div>
	<table class="table table-striped table-hover">
		<caption>高雄市 政府公車處 紅16 接駁公車假 日延駛至高軟發車時間表</caption>
		<thead>
			<tr>
				<th scope="col" colspan="4">R16假 日延駛至高軟時間表</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>06:00</td>
				<td>10:50</td>
				<td>16:10</td>
				<td>20:50</td>
			</tr>
			<tr>
				<td>06:30</td>
				<td>11:30</td>
				<td>16:50</td>
				<td>21:30</td>
			</tr>
			<tr>
				<td>07:05</td>
				<td>12:10</td>
				<td>17:20</td>
				<td>22:10</td>
			</tr>
			<tr>
				<td>07:35</td>
				<td>12:50</td>
				<td>17:50</td>
				<td>23:30</td>
			</tr>
			<tr>
				<td>08:05</td>
				<td>13:30</td>
				<td>18:20</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>08:50</td>
				<td>14:10</td>
				<td>18:50</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td>09:30</td>
				<td>15:30</td>
				<td>20:10</td>
				<td>&nbsp;</td>
			</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript"
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD6BiLTKUqjVWtMenArjWWYio8KagHnJ8c&sensor=true&region=zh_TW&language=zh-TW"></script>
<script type="text/javascript">
  var map;
  var address = '高雄市前鎮區復興四路12號1F';
  var contentString = '<br /><b>MOPCON</b>位於: <br />'+address; 

  function initialize() {
  var our_store = new google.maps.LatLng(22.604912, 120.300196), 
      geocoder = new google.maps.Geocoder(),
      map = new google.maps.Map(document.getElementById('map_canvas'), {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
	    center: our_store,
	    zoom: 17
      });

      var infowindow = new google.maps.InfoWindow({
	    content: contentString,
	    maxWidth: 280,
	    disableAutoPan: true
      });

      geocoder.geocode( { 
	    'location': our_store
	    }, function(results, status) {
	      if (status == google.maps.GeocoderStatus.OK) {
		  map.setCenter(results[0].geometry.location);
		  var marker = new google.maps.Marker({
		      map: map,
		      position: results[0].geometry.location,
		      animation: google.maps.Animation.DROP,
		      title: "Too Fat Cake"
		  });
		  infowindow.open(map,marker);
	      } else {
		  alert("Geocode ERROR: " + status);
	      }
      });

  }
  
  initialize();
</script>