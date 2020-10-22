<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\style.css">
    
    <link rel="stylesheet" href="css/login.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login SysCPE</title>

</head>
<body>
    <form class="form-login" action="#" method="post">
        <div class="login-card card">
            <div class="card-header">
                <span class="font-weight-light">Sys</span>
                <span class="font-weight-bold mx-2">CPE</span>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email"
                        class="form-control" value="<?= $email ?>"
                        placeholder="Informe o e-mail" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password"
                        class="form-control" placeholder="Informe a senha">
                </div>
            </div>
            <div class="card-footer">
                    <button class="btn btn-lg btn-primary">Entrar</button>
            </div>
        </div>
    </form>
</body>
</html>