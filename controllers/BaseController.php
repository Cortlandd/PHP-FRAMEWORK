<?php

namespace app\controllers;

class BaseController{

    public function __construct(){
        $this->view = new \phpframework\core\view\View(
            new \phpframework\core\view\ViewLoader(BASEPATH.'/views/')
        );
    }
}