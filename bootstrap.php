<?php
	
	/*
	Both the View & ViewLoader are being lazyloaded (loaded on demand), so
	here is no need to call require everytime I want to use them. They
	get loaded either by .standart (core/...) or by registred loader
	($autoloader->register...)
	*/
	<================================================>

	require('config.php');

	require('core/autoload/autoload.php');

	$autoloader = new Autoload();

	spl_autoload_register([$autoloader, 'load']);

	$autoloader->register('viewloader', function(){
	    return require(BASEPATH.'/core/view/viewLoader.php');
	});

	$view = new View( new ViewLoader(BASEPATH.'/views/') );

	// Adding router to the bootstrap file:
	$router = new Router(); 

	<=================================================>

?>