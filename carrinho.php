<?php
session_start();
if(!isset($_SESSION['itens']))
{
	$_SESSION['itens'] = array();
}

if(isset($_GET['add']) && $_GET['add'] == "carrinho")
{
	$idFrete = $_GET['codigo'];
	if(!isset($_SESSION['itens'] [$codigoFrete]))
	{
		$_SESSION['itens'] [$codigoFrete] = 1;
	}else{
		$_SESSION['itens'] [$codigoFrete] +=1;
	}
}

if(count($_SESSION['itens']) == 0) {
	echo 'Carrinho Vazio<br><a href="favoritos.php">Adicionar itens<a/>';
}else{
	$query = "SELECT * FROM fretes";
    $result = mysql_query($query);
    while($fetch = mysql_fetch_row($result)){
        echo "<p>";
        foreach ($fetch as $value) {
            echo $value . " - ";
        }
        echo "</p>";
}}
?>

