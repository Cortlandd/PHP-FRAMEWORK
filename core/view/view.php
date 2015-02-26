
<!-- TO BE USED PUBLICLY FOR VIEW LOADING -->

<?php 
	class View {
		public function _construct($viewLoader) {
			$this->viewLoader = $viewLoader;
		}

		public function display($viewName) {
			echo $this->viewLoader->Load($viewName);
		}
	}
?>