<?php
	include_once("conexao.php");
    
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
	$empresa = mysqli_real_escape_string($conexao, $_POST['empresa']);
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
	$peso = mysqli_real_escape_string($conexao, $_POST['peso']);
	$distancia = mysqli_real_escape_string($conexao, $_POST['distancia']);
	$combustivelGasto = mysqli_real_escape_string($conexao, $_POST['combustivelGasto']);
	$localColeta = mysqli_real_escape_string($conexao, $_POST['localColeta']);
	$dataColeta = mysqli_real_escape_string($conexao, $_POST['dataColeta']);
	$localEntrega = mysqli_real_escape_string($conexao, $_POST['localEntrega']);
	$dataEntrega = mysqli_real_escape_string($conexao, $_POST['dataEntrega']);



	$result_historico = "INSERT INTO historico (codigo, descricao, empresa,nome, valor, peso, distancia, combustivelGasto,localColeta ,dataColeta , localEntrega,dataEntrega) VALUES ( '', '$descricao', '$empresa', '$nome','$valor', '$peso', '$distancia', '$combustivelGasto' , '$localColeta' ,'$dataColeta' , '$localEntrega', '$dataEntrega')";	
	$resultado_historico = mysqli_query($conexao, $result_historico);	
?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
    
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/emandamento.php'>
				<script type=\"text/javascript\">
					alert(\"Frete finalizado com Sucesso!.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/emandamento.php'>
				<script type=\"text/javascript\">
					alert(\"Não foi possível finalizado o frete!.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>