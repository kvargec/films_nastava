<?php

/**
 * Description of FilmController
 *
 * @author prof
 */
class FilmController extends BaseController{
    public function index(){
        $this->loadModel('Film');
        $film=new Film();
        $data['filmovi']=$film->all();
        $this->loadView('film/list', $data);
    }
}
