<?php
	$servidor = "localhost";
	$usuario = "root";
	//$senha = "";//AMBIENTE DE PRODUÇÃO
	$senha = "";//AMBIENTE DE DESENVOLVIMENTO - root@201306
	$dbname = "projetos";
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		echo "ERROR: 1";
	}else{
			//echo "Conexao realizada com sucesso";
	}
	
	
	?>
