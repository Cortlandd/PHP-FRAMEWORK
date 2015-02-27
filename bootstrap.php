<?php
	
	/*
	Both the View & ViewLoader are being lazyloaded (loaded on demand), so
	here is no need to call require everytime I want to use them. They
	get loaded either by .standart (core/...) or by registred loader
	($autoloader->register...)
	*/
	<================================================>

	require('config.php');
	require('vendor/autoload.php');
	
	$router = new phpocean\core\router\Router();
	$view = new phpocean\core\view\View(
		new phpocean\core\view\ViewLoader(BASEPATH.'/views/')
	);

	<=================================================>

?>