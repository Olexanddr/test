
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>HELLO2</title>
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			<?php include "style.css";?>
		</style>
	</head> 
	<body>
		<h2>Редагувати конференцію <?php echo $pageData["title"]; ?></h2>
		<form action = "/conferences/edit/save" method="post" class = "create-form">
			<input type = "hidden" name = "id" value = "<?php echo $pageData["id"] ?>">
			<label>Назва:</label><input type = "text" name="title" value = "<?php echo $pageData["title"] ?>" minlength="2" maxlength = "255" required="required"><br>
			
			<label>Дата і час проведення:</label><input type = "datetime-local" name = "data" value = "<?php echo $pageData["data"] ?>" required="required" min = "<?php echo date('Y-m-d H:i'); ?>"><br>
			<label>Широта:</label><input type = "number" name = "latitude" id = "lat-span" onchange = "setCoord()" value = "<?php echo $pageData["latitude"] ?>" required="required" step="0.000000000000001" min = "-85" max = "85"><br>
			<label>Долгота:</label><input type = "number" name = "longitude" id = "lng-span" onchange = "setCoord()" value = "<?php echo $pageData["longitude"] ?>" required="required" step="0.000000000000001" min = "-150" max = "175"><br>
			<div id = "map" class = "map"></div>
			
			<select name="country" class = "select-country">
  				<option value="Китай" <?php if($pageData["country"] == "Китай"){echo "selected";}?>>Китай</option>
  				<option value="Украина" <?php if($pageData["country"] == "Украина"){echo "selected";}?>>Украина</option>
  				<option value="Греция" <?php if($pageData["country"] == "Греция"){echo "selected";}?>>Греция</option>
  				<option value="Чехия" <?php if($pageData["country"] == "Чехия"){echo "selected";}?>>Чехия</option>
  				<option value="Англия" <?php if($pageData["country"] == "Англия"){echo "selected";}?>>Англия</option>
  				<option value="Португалия" <?php if($pageData["country"] == "Португалия"){echo "selected";}?>>Португалия</option>
			</select><br>
			<input type = "submit" class = "btn btn-success but-create" value="Зберегти">
			<a href = "/conferences" class = "btn btn-secondary but-create">Назад</a>
			<a href = "/conferences/delete?id=<?php echo $pageData["id"];?>" class="btn btn-danger but-create">Видалити</a>
		</form>
		<script>
			var myLatLng = {lat: <?php echo $pageData["latitude"] ?>, lng: <?php echo $pageData["longitude"] ?>}
			var marker;
			function initMap() {
    	

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

			}
			function setCoord(){
     			myLatLng.lat = document.getElementById('lat-span').value;
     			myLatLng.lng = document.getElementById('lng-span').value;
     			var latlng = new google.maps.LatLng(myLatLng.lat, myLatLng.lng);
     			marker.setPosition(latlng);
     		}
		</script>
		<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDTKaESCZSmfR7TAh7KjY8ZPOY7-9lLUkA&callback=initMap" defer>
		</script>
	</body>
</html>
