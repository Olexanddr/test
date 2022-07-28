<?php
	class CreateModel extends Model{
		public function saveNew($arr){
			$query = $this->db->prepare("INSERT INTO heroku_dc0e8d8db09d6e3.conferences(title, data, latitude, longitude, country) VALUES (:title, :data, :latitude, :longitude, :country);");
			$query->execute($arr);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}


