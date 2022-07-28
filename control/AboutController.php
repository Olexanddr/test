<?php
	class AboutController extends Controller{
		private $pageTpl  = "/view/about.php";
		public function __construct()
		{
			$this->model = new AboutModel();
			$this->view = new View();
		}
		public function index()
		{
			$this->pageData = $this->model->getInfo($_GET['id']);
			$this->view->render($this->pageTpl, $this->pageData);
		}
	}
