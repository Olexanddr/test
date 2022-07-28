<?php
	class DeleteController extends Controller{
		
		public function __construct()
		{	
			$this->model = new DeleteModel();
			$this->view = new View();
		}

		public function index()
		{
			$id = $_GET["id"];
			$this->model->delete($id);
		}
	}
