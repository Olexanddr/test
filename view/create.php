	
<html>
	<head>
		<title><?php echo "New title 3"; ?></title>
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			<?php include "style.css";?>
		</style>
	</head>
	<body>
		<h2>Створити нову конференцію</h2>
		<form action = "/conferences/create/save" method = "post" class = "create-form">
			<label class="form-label ">Title</label><input type = "text" name = "title" minlength="2" maxlength = "255" required="required"><br>
			<label>Дата і час проведення:</label><input type = "datetime-local" name = "data" required="required" min = "<?php echo date('Y-m-d H:i'); ?>"><br>
			<label>Широта:</label><input type = "number" name = "latitude" id = "lat-span" onchange = "setCoord()" required="required" step="0.000000000000001" min = "-85" max = "85"><br>
			<label>Довгота:</label><input type = "number" name = "longitude" id = "lng-span" onchange = "setCoord()" required="required" step="0.000000000000001" min = "-150" max = "175"><br>
			<div id = "map" class = "map"></div>
			
			<select name="country" class = "select-country">
  				<option value="Китай">Китай</option>
  				<option value="Украина">Украина</option>
  				<option value="Греция">Греция</option>
  				<option value="Чехия">Чехия</option>
  				<option value="Англия">Англия</option>
  				<option value="Португалия">Португалия</option>
			</select><br>
			<input type = "submit" value = "Створити" class = "btn btn-success but-create">
			<a href = "/conferences" class = "btn btn-secondary ">Назад</a>
		</form>
	</body>
	<script>
		var myLatLng = {lat: 0, lng: 0}
		var marker;

		function initMap() {
    		var lat = document.getElementById('lat-span').value;
     		var lng = document.getElementById('lng-span').value;

    		var map = new google.maps.Map(document.getElementById('map'), {
      			center: myLatLng,
      			zoom: 4
    		});

    		marker = new google.maps.Marker({
          		position: myLatLng,
          		map: map,
          		title: 'Google Maps',
          		draggable: true
       		});

     		google.maps.event.addListener(marker, 'dragend', function(marker) {
        		var latLng = marker.latLng;
        		document.getElementById('lat-span').value = latLng.lat();
        		document.getElementById('lng-span').value = latLng.lng();
     		});
     		if(lat == "" || lng == ""){
     			marker.setPosition(null);
     		}

		}
		function setCoord(){
     		myLatLng.lat = document.getElementById('lat-span').value;
     		myLatLng.lng = document.getElementById('lng-span').value;
     		var latlng = new google.maps.LatLng(myLatLng.lat, myLatLng.lng);
     		marker.setPosition(latlng);
  			//alert(!isNaN(parseFloat(myLatLng.lat)) && isFinite(myLatLng.lat));
			
     		if(myLatLng.lat == "" || myLatLng.lng == ""){
     			marker.setPosition(null);
     		}
     	

     	}
	</script>
	<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDTKaESCZSmfR7TAh7KjY8ZPOY7-9lLUkA&callback=initMap" defer>
	</script>
</html>



