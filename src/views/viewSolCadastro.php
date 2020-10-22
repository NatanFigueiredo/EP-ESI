

    <form action="/" method="post">
        <div id="dadosRegistro">
            <label for="txtNome">Nome Completo:</label>
            <input type="text" class="form-control" id="txtNome" required>

            <label for="txtCPF">CPF:</label>
            <input type="text" class="form-control" id="txtCPF" required>

            <label for="txtNasc">Data de Nascimento:</label>
            <input type="date" class="form-control" id="txtNasc" required>

            <label for="txtEmail">Email:</label>
            <input type="text" class="form-control" id="txtEmail" required>
            
            <label for="txtCelular">Posição</label>
            <input type="text" class="form-control" id="txtCelular" required>
        </div>

        <div id="dadosCPE">
            <label for="txtFuncao">Função no CPE:</label>
            <input type="text" class="form-control" id="txtFuncao" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <button type="submit" class="btn btn-primary">Cancelar</button>
        

    </form>