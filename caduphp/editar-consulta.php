<h1 class="text-center mb-4">Editar Consulta</h1>

<?php
// Recuperar o ID da consulta para editar
$sql = "SELECT * FROM consulta WHERE id_consulta=" . $_REQUEST['id_consulta'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<form action="?page=salvar-consulta" method="POST" class="p-4 shadow-lg rounded" style="background-color: #f8f9fa;">
    <!-- Ação para editar o dado -->
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_consulta" value="<?php print $row->id_consulta; ?>">

    <!-- Campo para selecionar o paciente -->
    <div class="mb-3">
        <label class="form-label text-primary" for="paciente_id_paciente">Nome do Paciente</label>
        <select name="paciente_id_paciente" class="form-control">
            <option> -= Escolha um Paciente =- </option>
            <?php
            $sql_1 = "SELECT * FROM paciente AS p
                      INNER JOIN consulta AS c
                      ON p.id_paciente = c.paciente_id_paciente";
            $res_1 = $conn->query($sql_1);
            $qtd_1 = $res_1->num_rows;

            if ($qtd_1 > 0) {
                while ($row_1 = $res_1->fetch_object()) {
                    $selected = ($row_1->id_paciente == $row->paciente_id_paciente) ? "selected" : "";
                    print "<option value='" . $row_1->id_paciente . "' $selected>" . $row_1->nome_paciente . "</option>";
                }
            } else {
                print "<option>Não há pacientes</option>";
            }
            ?>
        </select>
    </div>

    <!-- Campo para selecionar o médico -->
    <div class="mb-3">
        <label class="form-label text-primary" for="medico_id_medico">Nome do Médico</label>
        <select name="medico_id_medico" class="form-control">
            <option> -= Escolha um Médico =- </option>
            <?php
            $sql_2 = "SELECT * FROM medico AS m
                      INNER JOIN consulta AS c
                      ON m.id_medico = c.medico_id_medico";
            $res_2 = $conn->query($sql_2);
            $qtd_2 = $res_2->num_rows;

            if ($qtd_2 > 0) {
                while ($row_2 = $res_2->fetch_object()) {
                    $selected = ($row_2->id_medico == $row->medico_id_medico) ? "selected" : "";
                    print "<option value='" . $row_2->id_medico . "' $selected>" . $row_2->nome_medico . "</option>";
                }
            } else {
                print "<option>Não há médicos</option>";
            }
            ?>
        </select>
    </div>

    <!-- Campo para a data da consulta -->
    <div class="mb-3">
        <label class="form-label text-primary" for="data_consulta">Data da Consulta</label>
        <input type="date" name="data_consulta" class="form-control" value="<?php print $row->data_consulta; ?>">
    </div>

    <!-- Campo para a hora da consulta -->
    <div class="mb-3">
        <label class="form-label text-primary" for="hora_consulta">Hora da Consulta</label>
        <input type="time" name="hora_consulta" class="form-control" value="<?php print $row->hora_consulta; ?>">
    </div>

    <!-- Campo para a descrição da consulta -->
    <div class="mb-3">
        <label class="form-label text-primary" for="descricao_consulta">Descrição</label>
        <textarea name="descricao_consulta" class="form-control" rows="4"><?php print $row->descricao_consulta; ?></textarea>
    </div>

    <!-- Botão para salvar a consulta -->
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
</style>
