<?php

/**
 * Description of FilmController
 *
 * @author prof
 */
class FilmController extends BaseController{
    public function index(){
        $this->loadModel('Film');
        $this->loadModel('Language');
        $film=new Film();
        $jezik=new Language();
        $filmovi=$film->all();
        $podaci=array();
        foreach($filmovi as $film){
            $podaci['id']=$film['film_id'];
            $podaci['title']=$film['title'];
            $kojiJezik=$jezik->byPk($film['language_id']);
            $podaci['lan']=$kojiJezik['name'];
            $data['filmovi'][]=$podaci;
        }
        $this->loadView('film/list', $data);
    }
}
