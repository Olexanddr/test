<?php
	class AboutModel extends Model{
		public function getInfo($id)
        {
            $data = array();
            $query = $this->db->prepare("SELECT * FROM test.conferences WHERE id = :id");
            $query->execute(['id' => $id]);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            $result[0]["data"] = str_replace('T', ' ', $result[0]["data"]);
            return $result[0];
        }
}
