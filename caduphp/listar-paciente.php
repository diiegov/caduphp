<h1 class="text-center text-primary mb-4">Listar Paciente</h1>
<?php
    $sql = "SELECT * FROM paciente";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        echo "<p class='text-success fw-bold'>Encontrado(s) <b>$qtd</b> resultado(s)</p>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-bordered table-striped table-hover align-middle'>";
        echo "<thead class='table-primary text-center'>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>Nome</th>";
        echo "<th>CPF</th>";
        echo "<th>E-mail</th>";
        echo "<th>Fone</th>";
        echo "<th>Endereço</th>";
        echo "<th>Data de Nasc.</th>";
        echo "<th>Sexo</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = $res->fetch_object()) {
            $sexo = ($row->sexo_paciente == 'm') ? 'Masculino' : 'Feminino'; // Definindo o sexo
            echo "<tr>";
            echo "<td class='text-center'>{$row->id_paciente}</td>";
            echo "<td>{$row->nome_paciente}</td>";
            echo "<td>{$row->cpf_paciente}</td>";
            echo "<td>{$row->email_paciente}</td>";
            echo "<td>{$row->fone_paciente}</td>";
            echo "<td>{$row->endereco_paciente}</td>";
            echo "<td>{$row->data_nasc_paciente}</td>";
            echo "<td>{$sexo}</td>";
            echo "<td class='text-center'>";
            echo "<button class='btn btn-success btn-sm me-2' onclick=\"location.href='?page=editar-paciente&id_paciente={$row->id_paciente}';\">Editar</button>";
            echo "<button class='btn btn-danger btn-sm' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-paciente&acao=excluir&id_paciente={$row->id_paciente}';}\">Excluir</button>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='text-danger fw-bold'>Não encontrou resultado</p>";
    }
?>
