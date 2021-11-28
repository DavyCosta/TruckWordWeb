<?php
	include_once("conexao.php");
	
	$codigo = $_GET['codigo'];
	
	$result_fretes = "DELETE FROM fretes WHERE codigo = '$codigo'";
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
					alert(\"Frete Deletado com Sucesso.\");
				</script>
			";	
		}else{
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TruckWordWeb/painel_emp.php'>
				<script type=\"text/javascript\">
					alert(\"Frete não foi Deletado com Sucesso.\");
				</script>
			";	
		}?>
	</body>
</html>
<?php $conexao->close(); ?>