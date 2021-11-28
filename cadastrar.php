<?php
	include_once("conexao.php");
	$cpf = mysqli_real_escape_string($conexao, $_POST['cpf']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
$celular = mysqli_real_escape_string($conexao, $_POST['celular']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$cnh = mysqli_real_escape_string($conexao, $_POST['cnh']);
$categoria = mysqli_real_escape_string($conexao, $_POST['categoria']);
$marca = mysqli_real_escape_string($conexao, $_POST['marca']);
$modelo = mysqli_real_escape_string($conexao, $_POST['modelo']);
$carroceria = mysqli_real_escape_string($conexao, $_POST['carroceria']);
$placa = mysqli_real_escape_string($conexao, $_POST['placa']);
$media = mysqli_real_escape_string($conexao, $_POST['media']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



	$result_usuario = "INSERT INTO usuario (codigo, cpf, nome, usuario, cep, celular, telefone, cnh,categoria ,marca , modelo,carroceria, placa, media, senha) VALUES ( '', '$cpf', '$nome', '$usuario', '$cep', '$celular', '$telefone', '$cnh' ,'$categoria' ,'$marca' , '$modelo','$carroceria', '$placa', '$media', '$senha')";	
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	

	if($resultado_usuario['total'] == 1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: cadastro.php');
		exit;
	}

if($conexao->query($resultado_usuario) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
?>