<?php
	//Incluir a conexão com banco de dados
	include_once('conexao.php');
	
	//Recuperar o valor da palavra
	$registro = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$registro = "SELECT * FROM registro WHERE nome LIKE '%$registro%'";
	$resultado_registro = mysqli_query($conn, $registro);
	
	if(mysqli_num_rows($resultado_registro) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_registro)){
			echo "<li>".$rows['nome']."</li>";
		}
	}
?>