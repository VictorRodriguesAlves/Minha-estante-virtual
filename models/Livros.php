<?php
class Livros extends Model {
    
    public function pegarLivros(){
        $sql = "SELECT * FROM livros WHERE id_usuario = ?";
        $sql = Model::getConn()->prepare($sql);

        $sql->bindValue(1, $_SESSION['id_usuario']);
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }



}