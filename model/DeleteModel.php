<?php
	class DeleteModel extends Model{
		public function delete($id){
			$query = $this->db->prepare("DELETE FROM heroku_dc0e8d8db09d6e3.conferences WHERE id = :id");
			$query->execute(["id" => $id]);
			$result = $query->fetchAll(PDO::FETCH_ASSOC);
			header("Location: /conferences");
		}
}
