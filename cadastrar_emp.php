<?php
	include_once("conexao.php");
	$cnpj = mysqli_real_escape_string($conexao, $_POST['cnpj']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
$celular = mysqli_real_escape_string($conexao, $_POST['celular']);
$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);



	$result_empresas = "INSERT INTO empresas (codigo, cnpj, nome, usuario, cep, celular, telefone, senha) VALUES ( '', '$cnpj', '$nome', '$usuario', '$cep', '$celular', '$telefone', '$senha')";	
	$resultado_empresas = mysqli_query($conexao, $result_empresas);	

	if($resultado_empresas['total'] == 1) {
		$_SESSION['usuario_existe'] = true;
		header('Location: cadastro_emp.php');
		exit;
	}

if($conexao->query($resultado_empresas) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: index.php');
exit;
?>