<?php
class editarController extends Model {

    public function index(){
        $id = $_GET['id'];
        $sql = "SELECT titulo, autor, id FROM livros WHERE id = ?";

        $sql = Model::getConn()->prepare($sql);

        $sql->bindValue(1, $id);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        


        $controller = new Controller;
        $controller->loadView('editar', $resultado);
    }

    public function editando(){
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $autor = filter_input(INPUT_POST, "autor", FILTER_SANITIZE_SPECIAL_CHARS);
        $id = $_GET['id'];

        $editar = new Editar;
        $editar->editar($titulo, $autor, $id);
    }

}