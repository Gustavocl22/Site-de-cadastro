<h1>Cadastrar Usuário</h1>
<form action="?page=salvar-usuario" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Cadastrador</label>
		<?php
			$sql = "SELECT * FROM formulario";
			
			$res = $conn->query($sql) or die($conn->error);
			
			$qtd = $res->num_rows;
			
			if($qtd > 0){
				print "<select name='id_cadastrar' class='form-control'>";
				print "<option>-=Selecione a Cadastro=-</option>";
				while($row = $res->fetch_object()){
					print "<option value='".$row->id_cadastro."'>".$row->nome_cadastral."</option>";
				}
				print "</select>";
			}else{
				print "<div class='alert alert-danger'>Não há nenhum resultado</div>";
			}
		?>
	</div>
	<div class="form-group">
		<label>Nome do Usuário *</label>
		<input type="text" name="nome_usuario" class="form-control" required>
	</div>
	<div class="form-group">
		<label>E-mail *</label>
		<input type="email" name="email_usuario" class="form-control" required>
	</div>
	<div class="form-group">
		<label>Fone</label>
		<input type="text" name="fone_usuario" class="form-control">
	</div>
	<div class="form-group">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nasc_usuario" class="form-control">
	</div>
	<div class="form-group">
		<label>Gênero</label>
		<label><input type="radio" name="genero_usuario" value="m"> Masculino</label>
		<label><input type="radio" name="genero_usuario" value="f"> Feminino</label>
		
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>