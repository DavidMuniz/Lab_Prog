<?php
include ("_assets/_crud/conexao.php");
include("_assets/_crud/protect.php");
protect();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagina Não Existe</title>
<style>


body {
    color: #fff;
    margin: 0;
    background: url(_assets/_img/texture.png) repeat;
}
.container {
    width: 960px;
    margin:50px auto;
    text-align: center;
    font: 13px/22px "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
    color: #000;
}
.box {
	background: url(_assets/_img/404.png) no-repeat 0 0;
	border-bottom: 5px solid #000;
	height: 343px;
	margin-bottom: 25px;
 	padding-bottom: 50px;
}
h1{
    font-family: arial,'sans-serif';
    font-size: 25pt;
}
a{
    font-family: arial,'sans-serif';
    text-decoration: none;
    color:#be0000;
}
.cover_pan{
	background: #fff url(_assets/_img/covers.jpg) repeat 1055px bottom;
	height: 343px;
	margin-left:1px;
	overflow: hidden;
	position: relative;
	width:99.5%;
	z-index: -1;
	-moz-animation-name: pan;
	-moz-animation-duration:40s;
	-moz-animation-iteration-count: infinite;
	-moz-animation-timing-function: linear;
	-webkit-animation-name: pan;
	-webkit-animation-duration:40s;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
}
@-moz-keyframes pan {
	0% {
		background-position: 1338px bottom;
	}
	100% {
		background-position: left bottom;
	}
}
@-webkit-keyframes pan {
	0% {
		background-position: 1338px bottom;
	}
	100% {
		background-position: left bottom;
	}
}
</style>

</head>

<body>
<div class="container">
    <div class="box">
        <div class="cover_pan"></div>
    </div>

    <h1>Ops , Pagina em Contrução</h1>

    <a href="usuario.php">Retornar a pagina inicial</a>
</div>



</body>
</html>
