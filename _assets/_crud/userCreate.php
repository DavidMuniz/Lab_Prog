<?php
include("conexao.php");

if(isset($_POST['btn_submit_cadastrar'])){
	$sql = "insert into usuarios(nome, email, senha) values(
                       '".$_POST['nome']."',
                       '".$_POST['email']."',
					   '".$_POST['senha']."')";
	if(mysqli_query($conn, $sql)){
		header('Location: ../../index.php');
	}else{
		echo "Erro".mysqli_error($conn);
	}
}

?>
