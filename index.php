<?php
	
	include 'router.php';
	
	$router = new Router();
	
	$router->route(array(
		'/' => 'home.php',
		'/about' => 'about.php'
	));