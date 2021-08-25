<h1>Editar Cadastros</h1>
<?php
	$sql = "SELECT * FROM formulario 
			WHERE id_cadastro=".$_REQUEST["id_cadastro"];
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-cadastros" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_cadastro" value="<?php print $row->id_cadastro; ?>">
	<div class="form-group">
		<label>Nome do Cadastros</label>
		<input type="text" name="nome_cadastral" class="form-control" value="<?php print $row->nome_cadastral; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>




