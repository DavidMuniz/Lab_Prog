<?php
include("conexao.php");
include("protect.php");
protect();

if(isset($_GET['id'])){
	$sql = "delete from acervo where id =" .$_GET['id'];
	if(mysqli_query($conn, $sql)){
	    header('Location:read.php');
	}else{
		echo "Erro ".mysqli_error($conn);
	}
}
?>
