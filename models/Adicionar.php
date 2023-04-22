<?php
class Adicionar extends Model {

    public function adicionando($titulo, $autor){
        
        if(!empty($titulo) && !empty($autor)){

            $sql = "INSERT INTO livros (titulo, autor, id_usuario) VALUES (?, ?, ?)";
            $sql = Model::getConn()->prepare($sql);

            $sql->bindValue(1, $titulo);
            $sql->bindValue(2, $autor);
            $sql->bindValue(3, $_SESSION['id_usuario']);
            $sql->execute();

            $sql = "UPDATE usuarios SET livros = (SELECT GROUP_CONCAT(id SEPARATOR ',') FROM livros WHERE id_usuario = :id_usuario) WHERE id = :id_usuario";
            $sql = Model::getConn()->prepare($sql);
            $sql->bindValue(':id_usuario', $_SESSION['id_usuario']);
            $sql->execute();

            header("Location:".BASE_URL."home");
            exit;

        }else{

            $_SESSION['campoVazio'] = "Prencha todos os campos.";
            header("Location:".BASE_URL."adicionar");
            exit;

        }

    }

}
