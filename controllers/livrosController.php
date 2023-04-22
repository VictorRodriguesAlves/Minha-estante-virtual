<?php
class livrosController extends Model {
    
    public function deletarlivro(){
        $id = $_GET['id'];
        $sql = "DELETE FROM livros WHERE id = ?";
        $sql = Model::getConn()->prepare($sql);

        $sql->bindValue(1, $id);
        $sql->execute();
        header("Location:".BASE_URL."home");
        exit;
    }


}