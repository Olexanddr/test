<?php
	class AboutModel extends Model{
		public function getInfo($id)
        {
            $data = array();
            $query = $this->db->prepare("SELECT * FROM heroku_dc0e8d8db09d6e3.conferences WHERE id = :id");
            $query->execute(['id' => $id]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $result[0]["data"] = str_replace('T', ' ', $result[0]["data"]);
            return $result[0];
        }
}
