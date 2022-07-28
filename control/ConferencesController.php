<?php
	class ConferencesController extends Controller{
		
		private $pageTpl  = "/view/conferences.php";

		public function __construct()
		{
			$this->model = new ConferencesModel();
			$this->view = new View();

		}

		public function index()
		{

			$this->pageData = $this->model->getTitles();
			$this->view->render($this->pageTpl, $this->pageData);
		}

	}
