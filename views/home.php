<?php
if(!isset($_SESSION['id_usuario'])){
    header("Location:".BASE_URL."login");
    exit;
}
$livro = new Livros;
$livros = $livro->pegarLivros();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha estante virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <script src="assets/js/home.js" defer></script>
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <h2 class="text-light">Minha estante virtual</h2>
            <div class="text-light col-1">
                <h2><a href="home/logout" class="text-decoration-none text-light font-weight-bold hover-effect">Logout</a></h2>
            </div>
        </div>
    </nav>   
    
    <div class="ms-5 mt-5">
        <h2>Meus livros</h2>
        <a href="adicionar" class="btn btn-dark">Adicionar</a>
    </div>

    <div class="container ">
        <div class="container">
            <div class="container">
    	        <div class="container">
        	        <div class="container">
                    <?php
                    if(sizeof($livros) > 0){
                        for($i = 0; $i < sizeof($livros); $i++){
                            echo'
                                <div class="border border-1 border-dark col-8 ms-5 mt-5 rounded position-relative" style="height: 16vh;">
                                <div class="ms-3 mt-2">
                                <h3>Livro: '.$livros[$i]['titulo'].'</h3>
                                <p>Autor: '.$livros[$i]['autor'].'</p>
                                <h6 id="status'.$i.'">Não lido<h6>
                                </div>
                                
                                <div class="dropdown position-absolute top-0 end-0 m-3">
                                <button class="btn btn-light dropdown-toggle-no-caret" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    ...
                                    </button>
                                <ul class="dropdown-menu bg-light" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item text-dark" href="livros/deletarLivro?id='.$livros[$i]['id'].'">Deletar</a></li>
                                    <li><a class="dropdown-item text-dark" href="editar?id='.$livros[$i]['id'].'">Editar</a></li>
                                    <li><button class="dropdown-item text-dark" id="alterarStatus'.$i.'" onclick="alterarStatus(\'status'.$i.'\', \'alterarStatus'.$i.'\')" >Marcar como lido</button></li>
                                </ul>
                                </div>
                            </div>
                        
                                ';
                        }
                    }else{
                        echo'
                        <div class="border border-1 border-dark col-8 ms-5 mt-5 rounded position-relative" style="height: 16vh;">
                        <div class="ms-3 mt-2">
                            <h1>Nenhum livro encontrado</h1>
                            <p>adicione mais livros no botão a esquerda<p>
                        </div>
                        
                    </div>
                
                        ';
                    }

                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>