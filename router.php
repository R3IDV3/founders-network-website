<?php
	
	class Router {
		
		private $_routes = array();
		
		public function route($routes) {
			$this->_routes = $routes;
			$uri = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
			foreach ($this->_routes as $key => $value) {
				if ($key === $uri) {
					if (file_exists($value)) {
						require_once $value;
						exit();
					} else {
						echo "<h1>404 File not found</h1>";
						exit();
					}
				}
			}
		}
	}