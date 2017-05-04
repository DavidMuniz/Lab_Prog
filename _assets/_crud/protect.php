<?php

if(!function_exists("protect")){
	function protect(){
		if(!isset($SESSION))
			session_start();

		if(!isset($_SESSION['usuarioNome']) || is_numeric($_SESSION['usuarioNome'])){
			header("Location: index.php");
		}
	}

}
?>
