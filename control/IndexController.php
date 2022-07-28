<?php
	class IndexController extends Controller{
		private $pageTpl  = "/view/main_tpl.php";
		public function __construct()
		{
			$this->model = new IndexModel();
			$this->view = new View();
		}
		public function index()
		{
			$this->pageData['title'] = "Start";
			$this->view->render($this->pageTpl, $this->pageData);
			//header("Location: /conferences");
		}
	}
