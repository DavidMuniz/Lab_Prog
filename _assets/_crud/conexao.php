<?php
	$servidor = "localhost";
	$usuario = "David";
	$senha = "P@ssw0rd";
	$dbname = "webworld";

	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
        //echo "Conexao realizada com sucesso";
	}
?>
