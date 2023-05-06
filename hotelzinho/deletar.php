<?php 
	include 'conexao.php';
	
	$id = $_GET['id'];

	//DELETAR 
	$queryDeletarArq = "SELECT * FROM imagem WHERE id='".$id."'";
	$deletarArq = mysqli_query($conexao, $queryDeletarArq);
	if($deletarArq):
		foreach ($deletarArq as $del):
			extract($del);			
			$foto_db = $foto;						
		endforeach;
		
		unlink("fotos/$foto_db");
		
		$queryDeletar = "DELETE FROM imagem WHERE id='".$id."'";
		$deletar = mysqli_query($conexao, $queryDeletar);
		
		mysqli_close($conexao);
		header("location: sistema.php?deletado=ok");
	else:
		mysqli_close($conexao);
		header("location: sistema.php?deletado=nok");
	endif;
	
?>