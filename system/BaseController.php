<?php

/**
 * Description of BaseController
 *
 * @author prof
 */
class BaseController {

    public function loadModel($model){
        require_once __DIR__.'/../model/'.$model.'.php';
    }
    public function loadView($view,$data){
        extract($data);
        require_once __DIR__.'/../views/'.$view.'.php';
    }
    public function loadController($controller){
        require_once __DIR__.'/../controller/'.$controller.'Controller.php';
    }
}
