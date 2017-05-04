<?php
include("conexao.php");
include("protect.php");
protect();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="../_css/style.css">

<script>
    function del(){
        alert("1 registro esta sendo excluido");
}
</script>

</head>
<body>
    <div class="">
        <div class="">
           <form action="" method="post" accept-charset="utf-8" class="form-read">
	            <label for="buscar"></label>
	            <input type="search" name="filtro" id="buscar" placeholder="Informe um nome ou categoria para filtrar ou mantenha vazio para trazer todos os dados">
	            <input type="submit" name="btn_buscar" value="Buscar">
            </form>
            <table class="table" cellspacing="0">
                <caption>Listagem de Apostilas</caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Paginas</th>
                        <th>Categoria</th>
                        <th>Resumo</th>
                        <th>Data/Hora Cadastro</th>
			            <th>Data/Hora Alteração</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
               	<?php
                    if(isset($_POST['btn_buscar'])){
                    $busca= $_POST["filtro"];
                    $msg= "Não existe nenhuma apostila ou categoria com o nome consultado: ";
                    $sql ="select *,DATE_FORMAT(dataCadastro, '%d/%m/%y %H:%i:%s') as dataCadastro,DATE_FORMAT(dataAlterado, '%d/%m/%y %H:%i:%s') as dataAlterado from acervo WHERE nome like '%$busca%' or categoria like'%$busca%'";
                    }else{
                    $sql="select *,DATE_FORMAT(dataCadastro, '%d/%m/%y %H:%i:%s') as dataCadastro,DATE_FORMAT(dataAlterado, '%d/%m/%y %H:%i:%s') as dataAlterado from acervo ";
                    }
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
	?>
                    <tr>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nome']?></td>
                        <td><?=$row['descricao']?></td>
                        <td><?=$row['paginas']?></td>
                        <td><?=$row['categoria']?></td>
                        <td><?=$row['resumo']?></td>
                        <td><?=$row['dataCadastro']?></td>
			            <td><?=$row['dataAlterado']?></td>
                        <td>
                            <a href="update.php?id=<?=$row['id']?>">Editar</a>
                            <span> | </span>
                            <a href="delete.php?id=<?=$row['id']?>" onclick="del()">Deletar</a>
                        </td>
                    </tr>
                <?php
                        }
                    }else{
                        echo "<tr class='msg'><td colspan='9'>$msg<span>$busca</span></td></tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
