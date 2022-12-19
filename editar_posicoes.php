<?php
include_once "config/conexao.php";
$array_aulas = $_POST['arrayordem'];

$cont_ordem = 1;
foreach($array_aulas as $id_aula){
	$result_aulas = "UPDATE projetos SET posicao_y = $cont_ordem WHERE cod_projeto = $id_aula";
	$resultado_aulas = mysqli_query($conexao, $result_aulas);	
	$cont_ordem++;
}
echo "<span style='color: green;'>Alterado com sucesso</span>";