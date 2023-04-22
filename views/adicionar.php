<?php
if(!isset($_SESSION['id_usuario'])){
    header("Location:".BASE_URL."login");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha estante virtual</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
</head>
<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <form action="adicionar/adicionando" method="post" class="border border-dark rounded col-6 d-flex flex-column justify-content-center bg-white shadow-lg" style="height: 60vh;">
            <h1 class="text-center mb-4">Adicionar livros</h1>

            <div class="form-group col-10 mx-auto">
                <label for="titulo" class="form-label">Título:</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
            </div>

            <div class="form-group col-10 mx-auto">
                <label for="autor" class="form-label">Autor:</label>
                <input type="text" name="autor" id="autor" class="form-control">
            </div>

            <div class="form-group text-center mt-4">
                <button type="submit" class="btn btn-dark col-4">Adicionar</button>
            </div>
            
        </form>
    </div>
</body>
</html>