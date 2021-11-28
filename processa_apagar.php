<?php
	include_once("conexao.php");
	
	$codigo = $_GET['codigo'];
	
	$result_fretesativo = "DELETE FROM fretesativo WHERE codigo = '$codigo'";
	$resultado_fretesativo = mysqli_query($conexao, $result_fretesativo);	
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
					alert(\"Frete Finalizado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/emandamento.php'>
				<script type=\"text/javascript\">
					alert(\"Frete não foi Finalizado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>