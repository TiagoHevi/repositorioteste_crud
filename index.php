<!DOCTYPE html>
<html>
<head>
	<title>sql</title>
</head>
<body>
	<?php
	include "crud.php";
	/*$tabela = "usuario"; 
	$coluna = "id, usuario, senha";
	$valores = "1, 'usuario', 'senha'";
	echo "<br>";
	echo $query = "INSERT INTO $tabela($coluna)VALUES($valores)";
	echo "<br>";*/



	$atualizar = new Crud();
	/*$tabela = "usuario";
	//$culona = "id, usuario, senha";
	$valor = 1 .'tiago'. 12345678;*/
	//$atualizar->Insert('usuario', 'id, usuario, senha', " 1, 'henrique', '123456789' ");

	//$atualizar->update("usuario", "usuario = 'joão' ", "id = 1");
	//


	$atualizar->inserir("usuario", "id, usuario, senha", "4 , 'gefy', '757857585' " );

	?>

	brincando com sql

</body>
</html>