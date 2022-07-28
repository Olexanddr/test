<?php
	class ConferencesModel extends Model{
		public function getTitles(){
			$query = $this->db->query("SELECT id,title,data FROM heroku_dc0e8d8db09d6e3.conferences");
			$row = $query->fetchAll(PDO::FETCH_ASSOC);
			for($i = 0;$i < count($row);$i++){
				$row[$i]["data"] = str_replace('T',' ',$row[$i]["data"]);
			}
			return $row;
		}
	}
