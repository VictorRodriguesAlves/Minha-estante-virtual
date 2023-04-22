<?php
class loginController {

    public function index(){
        require_once "views/login.php";
    }

    public function logando(){
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "password");

        $logar = new Login;
        $logar->logar($email, $senha);
    }



}