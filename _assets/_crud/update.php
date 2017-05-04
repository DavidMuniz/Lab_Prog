<?php
include("conexao.php");
include("protect.php");
protect();

if(isset($_POST['btn_submit'])){
	$sql = "update acervo set nome = '".$_POST['nome']."',
					     	  descricao = '".$_POST['descricao']."',
					   		  paginas = '".$_POST['paginas']."',
					   		  categoria = '".$_POST['categoria']."',
					   		  resumo = '".$_POST['resumo']."',
					   		  dataAlterado = '".date('Y-m-d H:i:s')."'
							  where id = '".$_POST['id']."'
	";
	if(mysqli_query($conn, $sql)){
		header('Location:read.php');
	}else{
		echo "Erro".mysqli_error($conn);
	}
}
$id = '';
$nome = '';
$descricao = '';
$paginas = '';
$categoria = '';
$resumo = '';

if(isset($_GET['id'])){
	$sql = "select * from acervo where id=".$_GET['id'];
	$resultado = mysqli_query($conn, $sql);
	if(mysqli_num_rows($resultado) > 0){
		$row = mysqli_fetch_assoc($resultado);
		$id = $row['id'];
		$nome = $row['nome'];
		$descricao = $row['descricao'];
		$paginas = $row['paginas'];
		$categoria = $row['categoria'];
		$resumo = $row['resumo'];
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="../_css/style.css">
</head>
<body>
<form action="" method="post" accept-charset="utf-8" class="form-update">
    <fildset><legend>Atualizar Registros</legend>
	<label for="id">Registro:</label>
	<input type="text" id="id" name="id" value="<?=$id?>" readonly />

	<label for="nome">Nome:</label>
	<input type="text" id="nome" name="nome" value="<?=$nome?>" />

	<label for="descricao">Descricao:</label>
	<input type="text" id="descricao" name="descricao" value="<?=$descricao?>"/>

	<label for="paginas">Paginas:</label>
	<input type="number" id="paginas" name="paginas" value="<?=$paginas?>"/>

	<label for="categoria">Categoria:</label>
	<input type="text" id="categoria" name="categoria" value="<?=$categoria?>"/>

    <div class="box">
        <label for="resumo">Resumo:</label>
        <textarea name="resumo" id="resumo" cols="50" rows="10">
        <?=$resumo?>
        </textarea>

        <input type="submit" name="btn_submit" value="Alterar"/>
       </div>
</fildset>
</form>
</body>
</html>
