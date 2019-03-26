<?php
require_once 'config/config.php';
require_once 'system/BaseController.php';
require_once 'system/BaseModel.php';
$uh=new BaseController();
if(isset($_GET['p'])){
    $koji=$_GET['p'];
    $uh->loadController($koji);
    $zaPoziv=$koji.'Controller';
    $kontroler=new $zaPoziv();
    $kontroler->index();
}else{
    $uh->loadController('Film');
    $kontroler=new FilmController();
    $kontroler->index();
};
