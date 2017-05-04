<?php
include("conexao.php");
include("protect.php");
protect();


if(isset($_POST['btn_submit'])){
	$sql = "insert into acervo(nome, descricao, paginas, categoria, resumo, dataCadastro) values('".$_POST['nome']."',
					   '".$_POST['descricao']."',
					   '".$_POST['paginas']."',
					   '".$_POST['categoria']."',
					   '".$_POST['resumo']."',
					   '".date('Y-m-d H:i:s')."')";
	if(mysqli_query($conn, $sql)){
		header('Location:read.php');
	}else{
		echo "Erro".mysqli_error($conn);
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
<form action="" method="post" accept-charset="utf-8" class="form-create">
    <fieldset><legend>Cadastro de Apostilas</legend>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"/>

        <label for="descricao">Descricao:</label>
        <input type="text" id="descricao" name="descricao"/>

        <label for="paginas">Paginas:</label>
        <input type="number" id="paginas" name="paginas"/>

        <label for="categoria">Categoria:</label>
        <input type="text" id="categoria" name="categoria"/>
        <div class="box">
        <label for="resumo">Resumo:</label>
        <textarea name="resumo" id="resumo" cols="50" rows="10">
        </textarea>

        <input type="submit" name="btn_submit" value="Cadastrar"/>
       </div>
    </fieldset>
</form>
</body>
</html>
