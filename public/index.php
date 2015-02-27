<?php
	
	
	require('../bootstrap.php');
	require('../routes.php');

	$router->dispatch();

	$indexController = new app\controllers\IndexController();
	$indexController->index();

	// <==========================================>

	/*

	require('../bootstrap.php');
	$view->display('hello.php');

	// First load the core libraries, ViewLoader and View classes
	require('../core/view/viewLoader.php');
	require('../core/view/view.php');

	// Then declare path to the views folder.
	$viewPath = __DIR__.'/../views/';

 	/* Next, create an instance of ViewLoader, 
	passing views folder path as constructor parameter
	then pass ViewLoader's instance to View constructor so our View instance will know how to load view files properly. 
	$viewLoader = new viewLoader($viewPath);
	$view = new View($viewLoader);


	// Then can call [ $view->display(viewName) ]; in order to display our previously created hello.php view!
	$view->display('hello.php');
	*/

	// <==========================================>	
?>