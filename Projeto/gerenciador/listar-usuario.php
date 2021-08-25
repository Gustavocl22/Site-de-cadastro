<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT u.*, b.* FROM usuario AS u
			INNER JOIN formulario AS b
			ON u.id_cadastrar = b.id_cadastro";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome Cadastral</th>";
		print "<th>Nome do Usuário</th>";
		print "<th>E-mail</th>";
		print "<th>Fone</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Gênero</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_usuario."</td>";
			print "<td>".$row->nome_cadastral."</td>";
			print "<td>".$row->nome_usuario."</td>";
			print "<td>".$row->email_usuario."</td>";
			print "<td>".$row->fone_usuario."</td>";
			print "<td>".$row->data_nasc_usuario."</td>";
			if($row->genero_usuario=="m"){
				$genero = "Masculino";
			}elseif($row->genero_usuario=="f"){
				$genero = "Feminino";
			}else{
				$genero = "Diversos";
			}
			print "<td>".$genero."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=editar-usuario&id_usuario=".$row->id_usuario."';\">Editar</button>
					 
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-usuario&acao=excluir&id_usuario=".$row->id_usuario."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>









