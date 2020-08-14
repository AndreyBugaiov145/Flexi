<!DOCTYPE html>
<html>
  <head>
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
  			<label >Введите долготу<input  class="form-control" type="number" id="lat"></label>
  			<label >Введите широту<input class="form-control"  type="text" id="lng"></label>
  			<input type="button" value="поставить метку" id="btn" class="btn btn-success">
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
