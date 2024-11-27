<h1 class="text-center mb-4">Editar Médico</h1>

<?php
// Recuperar os dados do médico para edição
$sql = "SELECT * FROM medico WHERE id_medico = " . $_REQUEST['id_medico'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-medico" method="POST" class="p-4 shadow-lg rounded" style="background-color: #f8f9fa;">
    <!-- Ação para editar o médico -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_medico" value="<?php print $row->id_medico; ?>">

    <!-- Campo para o nome do médico -->
    <div class="mb-3">
        <label class="form-label text-primary" for="nome_medico">Nome</label>
        <input type="text" name="nome_medico" class="form-control" value="<?php print $row->nome_medico; ?>">
    </div>

    <!-- Campo para o CRM do médico -->
    <div class="mb-3">
        <label class="form-label text-primary" for="crm_medico">CRM</label>
        <input type="text" name="crm_medico" class="form-control" value="<?php print $row->crm_medico; ?>">
    </div>

    <!-- Campo para a especialidade do médico -->
    <div class="mb-3">
        <label class="form-label text-primary" for="especialidade_medico">Especialidade</label>
        <input type="text" name="especialidade_medico" class="form-control" value="<?php print $row->especialidade_medico; ?>">
    </div>

    <!-- Botão para salvar as alterações -->
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-success px-4 py-2">Enviar</button>
    </div>
</form>

<!-- Estilos adicionais para aprimorar o visual -->
<style>
    h1 {
        font-family: 'Arial', sans-serif;
        color: #007bff;
    }

    .form-label {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .form-control {
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.25rem rgba(38, 143, 255, 0.25);
    }

    .btn-success {
        background-color: #28a745;
        border: none;
        border-radius: 5px;
        font-weight: bold;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .mb-3 {
        margin-bottom: 1.5rem;
    }

    label {
        color: #007bff;
    }
</style>
