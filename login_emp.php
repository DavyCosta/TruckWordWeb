<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index_emp.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from empresas where usuario = '{$usuario}' and senha = ('{$senha}')";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$empresas_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $empresas_bd['nome'];
	header('Location: painel_emp.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index_emp.php');
	exit();
}

