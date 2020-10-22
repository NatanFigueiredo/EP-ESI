<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <p class="titulo">Dados pessoais</p>

    <form action="/" method="post">
        <label for="txtNomeCivil">Nome Completo</label>
        <input type="text" class="form-control" id="txtNomeCivil" placeholder="Nome Completo" required>

        <label for="txtNomeSocial">Nome Social</label>
        <input type="text" class="form-control" id="txtNomeSocial" placeholder="Nome Social" required>
        
        <label for="txtRG">RG</label>
        <input type="text" class="form-control" id="txtRG" placeholder="" required>

        <label for="txtCPF">CPF</label>
        <input type="text" class="form-control" id="txtCPF" placeholder="Nome Social" required>
        
        <label for="txtNasc">RG</label>
        <input type="date" class="form-control" id="txtNasc" placeholder="" required>

        <label for="txtGenero">CPF</label>
        <select class="form-control" id="txtGenero" required>
            <option>Feminino</option>
            <option>Masculino</option>
            <option>Não-Binário</option>
            <option>Outros</option>
        </select>

        <label for="txtEmail">Email</label>
        <input type="email" class="form-control" id="txtEmail" required>

        <label for="txtCelular">Celular</label>
        <input type="text" class="form-control" id="txtCelular" placeholder="Nome Social" required>

        <label for="txtCurso">Curso de Graduação</label>
        <input type="text" class="form-control" id="txtCurso" required>

        <label for="txtAnoIngresso">Celular</label>
        <input type="text" class="form-control" id="txtAnoIngresso" placeholder="Nome Social" required>

        <label for="txtStatus">Status</label>
        <select class="form-control" id="txtStatus">
            <option>Ativo</option>
            <option>Desligado</option>
            <option>Afastado</option>
            <option>Em análise</option>
        </select>

        <label for="txtDepartamento">Departamento:</label>
        <input type="text" class="form-control" id="txtDepartamento" required>

        <label for="txtFuncao">Função:</label>
        <input type="text" class="form-control" id="txtFuncao" required>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
    </form>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>