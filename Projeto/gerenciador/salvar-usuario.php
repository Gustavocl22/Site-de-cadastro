<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO usuario (
						id_cadastrar, 
						nome_usuario, 
						email_usuario, 
						fone_usuario, 
						data_nasc_usuario, 
						genero_usuario) 
					VALUES (
					  ".$_REQUEST["id_cadastrar"].",
					'".$_REQUEST["nome_usuario"]."', 
					'".$_REQUEST["email_usuario"]."',
					'".$_REQUEST["fone_usuario"]."',
					'".$_REQUEST["data_nasc_usuario"]."',
					'".$_REQUEST["genero_usuario"]."')";
			         
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
		case "editar":
			$sql = "UPDATE usuario SET 
						id_cadastrar=".$_REQUEST["id_cadastrar"].",
						nome_usuario='".$_REQUEST["nome_usuario"]."',
						email_usuario='".$_REQUEST["email_usuario"]."',
						fone_usuario='".$_REQUEST["fone_usuario"]."',
						data_nasc_usuario='".$_REQUEST["data_nasc_usuario"]."',
						genero_usuario='".$_REQUEST["genero_usuario"]."'
					WHERE id_usuario=".$_REQUEST["id_usuario"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi editado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar.</div>";
			}
		break;
		case "excluir":
			$sql = "DELETE FROM usuario WHERE id_usuario=".$_REQUEST["id_usuario"];
			
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi excluído com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir.</div>";
			}
		break;
		
	}
?>
<p><a href="?page=listar-usuario" class="btn btn-primary">Listar</a></p>














