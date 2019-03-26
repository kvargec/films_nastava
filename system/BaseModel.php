<?php

/**
 * Description of BaseModel
 *
 * @author prof
 */
class BaseModel {
    private $table="";
    private $pk="";
    private $veza="";
    public function __construct($table,$pk) {
        $this->table=$table;
        $this->pk=$pk;
        $this->veza=mysqli_connect(HOST, DBUSER, DBPASS,DBNAME) or die();
        
    }
    public function all($fields="*"){
        $upit="SELECT ".$fields." FROM ".$this->table;
        $reza=  mysqli_query($this->veza, $upit);
        $data=NULL;
        while($row=  mysqli_fetch_assoc($reza)){
            $data[]=$row;
        }
        return $data;
    }
    
    public function byPk($id) {
        $upit="SELECT * FROM ".$this->table." WHERE ".$this->pk."=".$id;
        $reza=  mysqli_query($this->veza, $upit);
        $data=NULL;
        while($row=  mysqli_fetch_assoc($reza)){
            $data[]=$row;
        }
        return $data[0];
    }
}
