<h1 class="text-center text-primary mb-4">Cadastrar Consulta</h1>
<form action="?page=salvar-consulta" method="POST" class="p-4 shadow rounded bg-light">
    <input type="hidden" name="acao" value="cadastrar">

    <!-- Campo: Nome do Paciente -->
    <div class="mb-3">
        <label for="paciente_id_paciente" class="form-label text-primary fw-bold">Nome do Paciente</label>
        <select name="paciente_id_paciente" id="paciente_id_paciente" class="form-select" required>
            <option value=""> -= Escolha um Paciente =- </option>
            <?php
                $sql_1 = "SELECT id_paciente, nome_paciente FROM paciente";
                $res_1 = $conn->query($sql_1);
                $qtd_1 = $res_1->num_rows;

                if ($qtd_1 > 0) {
                    while ($row_1 = $res_1->fetch_object()) {
                        echo "<option value='{$row_1->id_paciente}'>{$row_1->nome_paciente}</option>";
                    }
                } else {
                    echo "<option value=''>Não há pacientes</option>";
                }
            ?>
        </select>
    </div>

    <!-- Campo: Nome do Médico -->
    <div class="mb-3">
        <label for="medico_id_medico" class="form-label text-primary fw-bold">Nome do Médico</label>
        <select name="medico_id_medico" id="medico_id_medico" class="form-select" required>
            <option value=""> -= Escolha um Médico =- </option>
            <?php
                $sql_2 = "SELECT id_medico, nome_medico FROM medico";
                $res_2 = $conn->query($sql_2);
                $qtd_2 = $res_2->num_rows;

                if ($qtd_2 > 0) {
                    while ($row_2 = $res_2->fetch_object()) {
                        echo "<option value='{$row_2->id_medico}'>{$row_2->nome_medico}</option>";
                    }
                } else {
                    echo "<option value=''>Não há médicos</option>";
                }
            ?>
        </select>
    </div>

    <!-- Campo: Data da Consulta -->
    <div class="mb-3">
        <label for="data_consulta" class="form-label text-primary fw-bold">Data da Consulta</label>
        <input type="date" id="data_consulta" name="data_consulta" class="form-control" required>
    </div>

    <!-- Campo: Hora da Consulta -->
    <div class="mb-3">
        <label for="hora_consulta" class="form-label text-primary fw-bold">Hora da Consulta</label>
        <input type="time" id="hora_consulta" name="hora_consulta" class="form-control" required>
    </div>

    <!-- Campo: Descrição -->
    <div class="mb-3">
        <label for="descricao_consulta" class="form-label text-primary fw-bold">Descrição</label>
        <textarea id="descricao_consulta" name="descricao_consulta" class="form-control" rows="3" placeholder="Detalhes da consulta"></textarea>
    </div>

    <!-- Botão de Envio -->
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg px-5">Salvar</button>
    </div>
</form>
