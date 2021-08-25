<h1>Cadastrar Usuario</h1>
<form action="?page=salvar-cadastros" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Cadastro</label>
		<input type="text" name="nome_cadastral" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>