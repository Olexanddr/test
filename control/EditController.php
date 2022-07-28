<?php
	class EditController extends Controller{
		
		private $pageTpl  = "/view/edit.php";

		public function __construct()
		{
			$this->model = new EditModel();
			$this->view = new View();

		}

		public function index()
		{
			$this->pageData = $this->model->getInfo($_GET['id']);

			$this->view->render($this->pageTpl, $this->pageData);
		}
		public function save(){
			$arr = $_POST;
			$this->model->setInfo($arr);
		}
	}
