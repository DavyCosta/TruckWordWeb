<?php
	include_once("conexao.php");
	$codigo = mysqli_real_escape_string($conexao, $_POST['codigo']);
	$cnpj = mysqli_real_escape_string($conexao, $_POST['cnpj']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
	$cep = mysqli_real_escape_string($conexao, $_POST['cep']);
	$celular = mysqli_real_escape_string($conexao, $_POST['celular']);
	$telefone = mysqli_real_escape_string($conexao, $_POST['telefone']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	
	$result_empresas = "UPDATE empresas SET cnpj='$cnpj', nome='$nome', usuario='$usuario', cep='$cep', celular='$celular', telefone='$telefone', senha='$senha' WHERE codigo = '$codigo'";	
	$resultado_empresas = mysqli_query($conexao, $result_empresas);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/minhaconta_emp.php'>
				<script type=\"text/javascript\">
					alert(\"Conta atualizada com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/minhaconta_emp.php'>
				<script type=\"text/javascript\">
					alert(\"Conta não foi atualizada com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>