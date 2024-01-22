<?php
class homeController{
private $obj;
    function __construct(){
        include('model/home.php');
        $this->obj = new homeModel();
        
    }
    function home(){
        $arr = $this->obj->home();
        include("view/header.php");
        include("view/body.php");
        include("view/footer.php");
    }
    function about(){
        $arr = $this->obj->about();
        include("view/header.php");
        include("view/body.php");
        include("view/footer.php");

    }
    function contect(){
        $arr = $this->obj->contect();
        include("view/header.php");
        include("view/body.php");
        include("view/footer.php");
    }
}



?>