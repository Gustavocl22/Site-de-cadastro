<h1>Editar Usuário</h1>
<?php
	$sql = "SELECT * FROM usuario 
			WHERE id_usuario=".$_REQUEST["id_usuario"];
			
	$res = $conn->query($sql) or die($conn->error);
	
	$row = $res->fetch_object();
?>
<form action="?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_cadastro" value="<?php print $row->id_cadastro; ?>">
	<div class="form-group">
		<label>Select</label>
		<?php
			$sql1 = "SELECT * FROM formulario";
			
			$res1 = $conn->query($sql1) or die($conn->error);
			
			$qtd1 = $res1->num_rows;
			
			if($qtd1 > 0){
				print "<select name='id_cadastro' class='form-control'>";
				print "<option>-=Selecione a pessoa=-</option>";
				while($row1 = $res1->fetch_object()){
					print "<option value='".$row1->id_cadastro."' ".($row1->id_cadastro == $row->id_cadastrar?"selected":"").">".$row1->nome_cadastral."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Usuário</label>
		<input type="text" name="nome_usuario" class="form-control" value="<?php print $row->nome_usuario; ?>">
	</div>
	<div class="form-group">
		<label>E-mail</label>
		<input type="email" name="email_usuario" class="form-control" value="<?php print $row->email_usuario; ?>">
	</div>
	<div class="form-group">
		<label>Fone</label>
		<input type="text" name="fone_usuario" class="form-control" value="<?php print $row->fone_usuario; ?>">
	</div>
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc_usuario" class="form-control" value="<?php print $row->data_nasc_usuario; ?>">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<label><input type="radio" name="genero_usuario" value="m" <?php print ($row->genero_usuario == "m"?"checked":""); ?> > Masculino</label>
		<label><input type="radio" name="genero_usuario" value="f" <?php print ($row->genero_usuario == "f"?"checked":""); ?> > Feminino</label>
		<label><input type="radio" name="genero_usuario" value="d" <?php print ($row->genero_usuario == "d"?"checked":""); ?> > Diversos</label>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Salvar</button>
	</div>
</form>




