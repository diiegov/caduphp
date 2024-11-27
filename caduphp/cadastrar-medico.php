<h1 class="text-center text-primary mb-4">Cadastrar Médico</h1>
<form action="?page=salvar-medico" method="POST" class="p-4 shadow rounded bg-light">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome_medico" class="form-label text-primary fw-bold">Nome</label>
        <input type="text" id="nome_medico" name="nome_medico" class="form-control" placeholder="Digite o nome do médico" required>
    </div>
    <div class="mb-3">
        <label for="crm_medico" class="form-label text-primary fw-bold">CRM</label>
        <input type="text" id="crm_medico" name="crm_medico" class="form-control" placeholder="Digite o CRM do médico" required>
    </div>
    <div class="mb-3">
        <label for="especialidade_medico" class="form-label text-primary fw-bold">Especialidade</label>
        <input type="text" id="especialidade_medico" name="especialidade_medico" class="form-control" placeholder="Digite a especialidade do médico" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">Enviar</button>
    </div>
</form>
