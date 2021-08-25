<h1>Listar Usuario</h1>
<?php
	$sql = "SELECT * FROM formulario";
	
	$res = $conn->query($sql) or die($conn->error);
	
	$qtd = $res->num_rows;
	
	print "<p>Encontrou <b>".$qtd."</b> resultado(s)</p>";
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->id_cadastro."</td>";
			print "<td>".$row->nome_cadastral."</td>";
			print "<td>
					 <button class='btn btn-success' onclick=\"location.href='?page=editar-cadastros&id_cadastro=".$row->id_cadastro."';\">Editar</button>
					 
					 <button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-cadastros&acao=excluir&id_cadastro=".$row->id_cadastro."';}else{false;}\">Excluir</button>
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
	}
?>









