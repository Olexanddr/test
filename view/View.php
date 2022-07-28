<?php
	ini_set('display_errors', 1);
	class View{
		public function render($tpl, $pageData){
			include ROOT.$tpl;
		}
	}




