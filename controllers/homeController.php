<?php
class homeController{
    
    public function index(){
        require_once "views/home.php";
    }

    public function logout(){
        session_destroy();
        header("Location:".BASE_URL."home");
        exit;
    }



}