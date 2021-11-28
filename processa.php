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
	
	$result_fretesativo = "UPDATE fretesativo SET descricao='$descricao', empresa='$empresa' , valor='$valor' , peso='$peso' , distancia='$distancia' , combustivelGasto='$combustivelGasto' , localColeta='$localColeta' , dataColeta='$dataColeta' , localEntrega='$localEntrega', dataEntrega='$dataEntrega' WHERE codigo = '$codigo'";	
	$result_fretesativo = mysqli_query($conexao, $result_fretesativo);	
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
	</head>

	<body> <?php
		if(mysqli_affected_rows($conexao) != 0){
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/index.php'>
				<script type=\"text/javascript\">
					alert(\"fretesativo alterado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/index.php'>
				<script type=\"text/javascript\">
					alert(\"fretesativo não foi alterado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>