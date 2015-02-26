<?php

	$router->add('/',function() use ($view){
	    $view->display('hello.php');
	});

	$router->add('/about-us',function() use ($view){
	    $view->display('about.php');
	});

?>