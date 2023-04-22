<?php
class Cadastro extends Model{

    public function cadastrar($nome, $email, $senha){

        if(!empty($nome) && !empty($email) && !empty($senha)){

            $verificar = new Verificar;
            if(!$verificar->emailExists($email)){

                $senha = password_hash($senha, PASSWORD_DEFAULT);

                $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
                $sql = Model::getConn()->prepare($sql);
    
                $sql->bindValue(1, $nome);
                $sql->bindValue(2, $email);
                $sql->bindValue(3, $senha);
                $sql->execute();
                
                header("Location:".BASE_URL."login");
                exit;
            }else{
        
                $_SESSION['emailExistente'] = 'Email ja existente, utilize outro.';
                header("Location:".BASE_URL."cadastro");
                exit;

            }
            
        }else{

            $_SESSION['campoVazio'] = 'Prencha todos os campos';
            header("Location:".BASE_URL."cadastro");
            exit;

        }

    }

}