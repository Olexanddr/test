<?php
	class CreateController extends Controller{
		
		private $pageTpl  = "/view/create.php";

		public function __construct()
		{
			$this->model = new CreateModel();
			$this->view = new View();

		}

		public function index()
		{
			$this->view->render($this->pageTpl, $this->pageData);
		}
		public function save(){
			$post_arr = $_POST;
			$this->model->saveNew($post_arr);
			header("Location: /conferences");
		}
	}
