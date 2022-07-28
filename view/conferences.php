
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			<?php include "style.css"?>
		</style>
		<title>HELLO2</title>
		<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<h2>Список конференцій:</h2>
		<div class = "container-fluid">
			<?php for($i =0; $i < count($pageData);$i++){?>
			<div class = "row conf-info">
				<div class = "col-lg-6">
					<a href = "/conferences/about?id=<?php echo $pageData[$i]["id"];?>" class = "conf-info-text"><?php echo $pageData[$i]["title"] ; ?></a>
					<p><?php echo $pageData[$i]["data"] ; ?></p>
				</div>
				<div class = "col-lg-6">
					<a href = "/conferences/edit?id=<?php echo $pageData[$i]["id"];?>" class="btn btn-outline-success conf-info-button">Редагувати</a>
					<a href = "/conferences/delete?id=<?php echo $pageData[$i]["id"];?>" class="btn btn-outline-danger conf-info-button">Видалити</a>
				</div>
			</div>
			<?php } ?>
		</div>
	<a href = "/conferences/create" class="btn btn-success new-conf"><h3>+ Нова конференція</h3></a>

</body>
</html>
