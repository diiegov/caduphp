<h1 class="text-center text-primary mb-4">Listar Médico</h1>
<?php
    $sql = "SELECT * FROM medico";
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
        echo "<th>CRM</th>";
        echo "<th>Especialidade</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        
        $count = 1; // Contagem começa a partir de 1
        while ($row = $res->fetch_object()) {
            echo "<tr>";
            echo "<td class='text-center'>{$count}</td>"; // Exibe a contagem
            echo "<td>{$row->nome_medico}</td>";
            echo "<td>{$row->crm_medico}</td>";
            echo "<td>{$row->especialidade_medico}</td>";
            echo "<td class='text-center'>";
            echo "<button class='btn btn-success btn-sm me-2' onclick=\"location.href='?page=editar-medico&id_medico={$row->id_medico}';\">Editar</button>";
            echo "<button class='btn btn-danger btn-sm' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medico&acao=excluir&id_medico={$row->id_medico}';}\">Excluir</button>";
            echo "</td>";
            echo "</tr>";
          
        }
        
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "<p class='text-danger fw-bold'>Nenhum resultado encontrado.</p>";
    }
?>
