<h1 class="text-center text-primary mb-4">Cadastrar Paciente</h1>
<form action="?page=salvar-paciente" method="POST" class="p-4 shadow rounded bg-light">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome_paciente" class="form-label text-primary fw-bold">Nome</label>
        <input type="text" id="nome_paciente" name="nome_paciente" class="form-control" placeholder="Digite o nome do paciente" required>
    </div>
    <div class="mb-3">
        <label for="cpf_paciente" class="form-label text-primary fw-bold">CPF</label>
        <input type="text" id="cpf_paciente" name="cpf_paciente" class="form-control" placeholder="Digite o CPF do paciente" required>
    </div>
    <div class="mb-3">
        <label for="email_paciente" class="form-label text-primary fw-bold">E-mail</label>
        <input type="email" id="email_paciente" name="email_paciente" class="form-control" placeholder="Digite o e-mail do paciente" required>
    </div>
    <div class="mb-3">
        <label for="fone_paciente" class="form-label text-primary fw-bold">Fone</label>
        <input type="text" id="fone_paciente" name="fone_paciente" class="form-control" placeholder="Digite o telefone do paciente" required>
    </div>
    <div class="mb-3">
        <label for="endereco_paciente" class="form-label text-primary fw-bold">Endereço</label>
        <input type="text" id="endereco_paciente" name="endereco_paciente" class="form-control" placeholder="Digite o endereço do paciente" required>
    </div>
    <div class="mb-3">
        <label for="data_nasc_paciente" class="form-label text-primary fw-bold">Data de Nascimento</label>
        <input type="date" id="data_nasc_paciente" name="data_nasc_paciente" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label text-primary fw-bold">Sexo</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_m" value="m" required>
            <label class="form-check-label" for="sexo_m">Masculino</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="sexo_paciente" id="sexo_f" value="f" required>
            <label class="form-check-label" for="sexo_f">Feminino</label>
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">Salvar</button>
    </div>
</form>
