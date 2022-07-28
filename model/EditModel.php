<?php
	class EditModel extends Model{
		public function getInfo($id){
			$data = array();
			$query = $this->db->prepare("SELECT * FROM heroku_dc0e8d8db09d6e3.conferences WHERE id = :id");
			$query->execute(['id' => $id]);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result[0];
		}
		public function setInfo($info){
			$query = $this->db->prepare("UPDATE test.conferences SET title = :title, data = :data, latitude = :latitude, longitude = :longitude, country = :country WHERE id = :id");
			$query->execute($info);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			header("Location: /conferences");
		}
	}
