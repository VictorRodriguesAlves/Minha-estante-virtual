<?php
class adicionarController {

    public function index(){
        require_once "views/adicionar.php";
    }

    public function adicionando(){
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $autor = filter_input(INPUT_POST, "autor", FILTER_SANITIZE_SPECIAL_CHARS);

        $adicionar = new Adicionar;
        $adicionar->adicionando($titulo, $autor);
    }

}