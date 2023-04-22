<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha estante virtual</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/login.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>


</head>
<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <form action="login/logando" method="post" id="form" class="border rounded-3 col-lg-4 col-md-6 col-sm-8 col-10 d-flex flex-column justify-content-center bg-white p-4" style="height: 60vh;">
            <h1 class="text-center mb-4">Login</h1>
            <div class="form-group">
                <label for="username" class="form-label">Email:</label>
                <input type="text" name="email" id="username" class="form-control campos" onkeypress="emailValidate()">
                <?php
                if(isset($_SESSION['campoInvalido'])){
                    echo '<span class="spanRequired">'.$_SESSION['campoInvalido'].'</span>';
                    session_destroy();
                }elseif(isset($_SESSION['emailInvalido'])){
                    echo '<span class="spanRequired">'.$_SESSION['emailInvalido'].'</span>';
                    session_destroy();
                }elseif(isset($_SESSION['campoInvallido'])){
                    echo '<span class="spanRequired">'.$_SESSION['campoInvallido'].'</span>';
                    session_destroy();
                }else{
                    echo '<span class="spanRequired">Informe um email valido.</span>';
                }
                ?>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Senha:</label>
                <input type="password" name="password" id="password" class="form-control campos" onkeypress="passValidate()">
                <span class="spanRequired">A senha deve ter no minimo 8 caracteres.</span>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-dark w-50 mb-3 mt-3">Entrar</button>
            </div>
            <p class="text-center">Não tem uma conta? <a href="cadastro">Registre-se aqui</a></p>
        </form>
    </div>
</body>
</html>