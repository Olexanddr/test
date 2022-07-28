
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			<?php include "style.css"?>
		</style>
	
		<title>HELLO2</title>
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<h2>Про конференцію <?php echo $pageData["title"]; ?></h2>
		<div class = "info">
			<p><b>Дата і час:</b> <?php echo $pageData["data"]; ?></p>
			<p><b>Широта:</b> <?php echo $pageData["latitude"]; ?></p>
			<p><b>Долгота:</b> <?php echo $pageData["longitude"]; ?></p>
			<p><b>Країна:</b> <?php echo $pageData["country"]; ?></p>
			<div id = "map" style = "width: 30%;height:250px;"></div>
		</div>
		<div class = "but-group">
			<a href = "/conferences" class="btn btn-outline-secondary">Назад</a>
			<a href = "/conferences/edit?id=<?php echo $pageData["id"];?>" class="btn btn-outline-success">Редактувати</a>
			<a href = "/conferences/delete?id=<?php echo $pageData["id"];?>" class="btn btn-outline-danger">Видалити</a>
		</div>
	</body>
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
       		 });
		}
	</script>
	<script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDTKaESCZSmfR7TAh7KjY8ZPOY7-9lLUkA&callback=initMap" defer>
	</script>
</html>
