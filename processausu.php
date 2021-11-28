<?php
	include_once("conexao.php");
	$codigo = mysqli_real_escape_string($conexao, $_POST['codigo']);
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
	
	$result_usuario = "UPDATE usuario SET cpf='$cpf', nome='$nome', usuario='$usuario', cep='$cep', celular='$celular', telefone='$telefone', cnh='$cnh' ,categoria='$categoria' ,marca='$marca' , modelo='$modelo',carroceria='$carroceria', placa='$placa', media='$media', senha='$senha' WHERE codigo = '$codigo'";	
	$resultado_usuario = mysqli_query($conexao, $result_usuario);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/minhaconta.php'>
				<script type=\"text/javascript\">
					alert(\"Conta atualizada com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/minhaconta.php'>
				<script type=\"text/javascript\">
					alert(\"Conta não foi atualizada com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>