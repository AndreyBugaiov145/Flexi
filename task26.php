<!DOCTYPE html>
<html>
  <head>
    <style>
		*{
			margin: 0;
			padding: 0;
		}
      #map {
        height: 400px;  
        width: 600px;  
       }
       .position{
			margin: 10px;
			padding: 10px;
       }
    </style>
  </head>
  <body>
  	<div class="position">
  		<form action="">
  			<label >Введите долготу<input type="number" id="lat"></label>
  			<label >Введите широту<input type="text" id="lng"></label>
  			<input type="button" value="поставить метку" id="btn">
  		</form>
  	</div>
    <div id="map"></div>
    <script>
    let map;
	function initMap() {
	var opt = {lat: 47.836642, lng: 35.106410};
	let mark ={lat: 47.836670, lng: 35.106410};
	map= new google.maps.Map(
	document.getElementById('map'), {zoom: 10, center: opt});
	var marker = new google.maps.Marker({
		position: mark,
		 map: map,
		 title : "ты навел наменя"
		});
	}	
	let newMarker;
	const btn = document.getElementById('btn')
	btn.addEventListener('click',marker,false);
	function marker(argument) {
		let lat = +document.getElementById('lat').value;
		let lng = +document.getElementById('lng').value;
		newMarker =new google.maps.Marker({
		position: {lat: lat, lng: lng},
		 map: map,
		 title : "ты навел наменя"
		});
		console.log(newMarker)
	}
    </script>

    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUcbC8FSKBFKUUoE9ACLIGE-vFUeQbjUg&callback=initMap">
    </script>
  </body>
</html>
