<?php

/**
 * Description of Film
 *
 * @author prof
 */
class Film extends BaseModel{
    public function __construct() {
        parent::__construct('film', 'film_id');
    }
    /*public function all($fields="*"){
        $upit="SELECT ".$fields." FROM ".$this->table;
        $reza=  mysqli_query($this->veza, $upit);
        $data=NULL;
        while($row=  mysqli_fetch_assoc($reza)){
            $data['id']=$row['film_id'];
            $data['title']=$row['title'];
            $data['lan']=$row['language_id'];
        }
        return $data;
    }*/
}
