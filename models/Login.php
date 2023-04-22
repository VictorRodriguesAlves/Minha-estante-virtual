<?php
class Login extends Model {

    public function logar($email, $senha){
        if(!empty($email) && !empty($senha)){
            $verificar = new Verificar;
            if($verificar->emailExists($email)){

                $senhaCriptografada = new Usuario;
                
                if(password_verify($senha, $senhaCriptografada->getPassByEmail($email))){
                    
                    $usuarioInfo = new Usuario;
                    $usuarioInfo = $usuarioInfo->getAllInfoByEmail($email);

                    $_SESSION['id_usuario'] = $usuarioInfo['id'];
                    $_SESSION['nome_usuario'] = $usuarioInfo['nome'];
                    $_SESSION['email_usuario'] = $usuarioInfo['email'];

                    header("Location:".BASE_URL."home");
                    exit;

                }else{
                    $_SESSION['campoInvalido'] = 'O email ou senha informado esta incorreto.';
                    header("Location:".BASE_URL."login");
                    exit;
                }


            }else{

                $_SESSION['emailInvalido'] = 'Informe um email valido.';
                header("Location:".BASE_URL."login");
                exit;

            }
            

        }else{

            $_SESSION['campoVazio'] = 'Prencha todos os campos';
            header("Location:".BASE_URL."login");
            exit;

        }
    }

}