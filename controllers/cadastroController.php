<?php
class cadastroController {
    public function index(){
        require_once "views/cadastro.php";
    }

    public function cadastrando(){
        $nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $senha = filter_input(INPUT_POST, "password");

        $cadastro = new Cadastro;
        $cadastro->cadastrar($nome, $email, $senha);
    }
}