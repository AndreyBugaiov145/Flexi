<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        #map {
            height: 400px;
            width: 600px;
        }
    </style>
</head>
<body>
<iframe src="https://www.google.com/maps/d/embed?mid=1JQPdDMXS8mYiumKLCvp1RHQklvEoR9qM" width="640"
        height="480"></iframe>

<!--
    Second way to add a card

    <div id="map"></div>
    <script>
		function initMap() {
			var opt = {lat: 47.836642, lng: 35.106410};
			var map = new google.maps.Map(
			document.getElementById('map'), {zoom: 15, center: opt});
			var marker = new google.maps.Marker({position: opt, map: map});
		}
    </script>

    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCUcbC8FSKBFKUUoE9ACLIGE-vFUeQbjUg&callback=initMap">
    </script>
 -->
<a href="index.php " class="btn btn-info " style="position:absolute; right: 0;top:0;">Вернуться к списку заданий</a>
</body>
</html>