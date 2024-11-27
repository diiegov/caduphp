<h1 class="text-center text-primary mb-4">Listar Consulta</h1>
<?php
// Habilitar exibição de erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Consultar dados de consultas
$sql = "SELECT * FROM consulta AS c
        INNER JOIN paciente AS p ON p.id_paciente = c.paciente_id_paciente
        INNER JOIN medico AS m ON m.id_medico = c.medico_id_medico";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    echo "<p class='text-success fw-bold'>Encontrado(s) <b>$qtd</b> resultado(s)</p>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-bordered table-striped table-hover align-middle'>";
    echo "<thead class='table-primary text-center'>";
    echo "<tr>";
    echo "<th>Médico</th>";
    echo "<th>Paciente</th>";
    echo "<th>Data</th>";
    echo "<th>Hora</th>";
    echo "<th>Descrição</th>";
    echo "<th>Ações</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>{$row->nome_medico}</td>";
        echo "<td>{$row->nome_paciente}</td>";
        echo "<td>{$row->data_consulta}</td>";
        echo "<td>{$row->hora_consulta}</td>";
        echo "<td>{$row->descricao_consulta}</td>";
        echo "<td class='text-center'>";
        echo "<button class='btn btn-success btn-sm me-2' onclick=\"location.href='?page=editar-consulta&id_consulta={$row->id_consulta}';\">Editar</button>";
        echo "<button class='btn btn-danger btn-sm' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-consulta&acao=excluir&id_consulta={$row->id_consulta}';}\">Excluir</button>";
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
