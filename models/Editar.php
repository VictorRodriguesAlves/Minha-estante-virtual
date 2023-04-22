<?php
class Editar extends Model {

    public function editar($titulo, $autor, $id){
        $sql = "UPDATE livros SET titulo = :titulo, autor = :autor WHERE id = :id";
        $sql = Model::getConn()->prepare($sql);

        $sql->bindValue(":titulo", $titulo);
        $sql->bindValue(":autor", $autor);
        $sql->bindValue(":id", $id);
        $sql->execute();

        header("Location:".BASE_URL."home");
        exit;
    }

}