<?php 
include("../conexao.php");

if(isset($_GET['codigo_mec'])){
    $codigo_mec = $mysqli->real_escape_string(($_GET['codigo_mec']));
    $resultado = $mysqli->query("SELECT FROM patrimonio WHERE codigo_mec = '$codigo_mec'") or die ($mysqli->error);
    $item = $resultado->fetch_assoc();

    if($_SERVER['REQUEST_METHOD '] === 'POST'){
        $codigo_mec = $mysqli->real_escape_string($_POST['codigo_mec']);
        $descricao = $mysqli->real_escape_string($_POST['descricao']);
        $tipo = $mysqli->real_escape_string($_POST['tipo']);
        $situacao = $mysqli->real_escape_string($_POST['situacao']);
        $modelo = $mysqli->real_escape_string($_POST['modelo']);
        $marca = $mysqli->real_escape_string($_POST['marca']);
        $estado_fisico = $mysqli->real_escape_string($_POST['estado_fisico']);
        $coordenacao = $mysqli->real_escape_string($_POST['coordenacao']);
        $observacoes = $mysqli->real_escape_string($_POST['observacoes']);
        $matricula = $mysqli->real_escape_string($_POST['matricula']);
        $matricula_agente = $mysqli->real_escape_string($_POST['matricula_agente']);
    }
}
?>