<?php
	include_once("conexao.php");
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
	$empresa = mysqli_real_escape_string($conexao, $_POST['empresa']);
	$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
	$peso = mysqli_real_escape_string($conexao, $_POST['peso']);
	$distancia = mysqli_real_escape_string($conexao, $_POST['distancia']);
	$combustivelGasto = mysqli_real_escape_string($conexao, $_POST['combustivelGasto']);
	$localColeta = mysqli_real_escape_string($conexao, $_POST['localColeta']);
	$dataColeta = mysqli_real_escape_string($conexao, $_POST['dataColeta']);
	$localEntrega = mysqli_real_escape_string($conexao, $_POST['localEntrega']);
	$dataEntrega = mysqli_real_escape_string($conexao, $_POST['dataEntrega']);



	$result_fretes = "INSERT INTO fretes (codigo, descricao, empresa, valor, peso, distancia, combustivelGasto,localColeta ,dataColeta , localEntrega,dataEntrega) VALUES ( '', '$descricao', '$empresa', '$valor', '$peso', '$distancia', '$combustivelGasto' , '$localColeta' ,'$dataColeta' , '$localEntrega', '$dataEntrega')";	
	$resultado_fretes = mysqli_query($conexao, $result_fretes);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/painel_emp.php'>
				<script type=\"text/javascript\">
					alert(\"Frete cadastrado com Sucesso!.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/painel_emp.php'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível cadastrado o frete!.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>