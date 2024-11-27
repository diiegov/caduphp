<h1 class="text-center mb-4">Editar Paciente</h1>

<?php
// Recuperar os dados do paciente para edição
$sql = "SELECT * FROM paciente WHERE id_paciente = " . $_REQUEST['id_paciente'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-paciente" method="POST" class="p-4 shadow-lg rounded" style="background-color: #f8f9fa;">
    <!-- Ação para editar o paciente -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_paciente" value="<?php print $row->id_paciente; ?>">

    <!-- Campo para o nome do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="nome_paciente">Nome</label>
        <input type="text" name="nome_paciente" class="form-control" value="<?php print $row->nome_paciente; ?>">
    </div>

    <!-- Campo para o CPF do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="cpf_paciente">CPF</label>
        <input type="text" name="cpf_paciente" class="form-control" value="<?php print $row->cpf_paciente; ?>">
    </div>

    <!-- Campo para o e-mail do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="email_paciente">E-mail</label>
        <input type="email" name="email_paciente" class="form-control" value="<?php print $row->email_paciente; ?>">
    </div>

    <!-- Campo para o telefone do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="fone_paciente">Fone</label>
        <input type="text" name="fone_paciente" class="form-control" value="<?php print $row->fone_paciente; ?>">
    </div>

    <!-- Campo para o endereço do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="endereco_paciente">Endereço</label>
        <input type="text" name="endereco_paciente" class="form-control" value="<?php print $row->endereco_paciente; ?>">
    </div>

    <!-- Campo para a data de nascimento do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="data_nasc_paciente">Data de Nascimento</label>
        <input type="date" name="data_nasc_paciente" class="form-control" value="<?php print $row->data_nasc_paciente; ?>">
    </div>

    <!-- Campo para o sexo do paciente -->
    <div class="mb-3">
        <label class="form-label text-primary">Sexo</label>
        <label><input type="radio" name="sexo_paciente" value="m" <?php echo($row->sexo_paciente == "m" ? "checked" : ""); ?>> Masculino</label>
        <label><input type="radio" name="sexo_paciente" value="f" <?php echo($row->sexo_paciente == "f" ? "checked" : ""); ?>> Feminino</label>
    </div>

    <!-- Botão para salvar as alterações -->
    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-success px-4 py-2">Salvar</button>
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
