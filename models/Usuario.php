<?php
class Usuario extends Model {

    public function getPassByEmail($email){
        $sql = "SELECT senha FROM usuarios WHERE email = ?";
        $sql = Model::getConn()->prepare($sql);
        $sql->bindValue(1, $email);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        return $resultado['senha'];

    }

    public function getAllInfoByEmail($email){
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $sql = Model::getConn()->prepare($sql);
        $sql->bindValue(1, $email);
        $sql->execute();
        $resultado = $sql->fetch(PDO::FETCH_ASSOC);
        return $resultado;

    }

}