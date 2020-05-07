<div class="form-group row">
	<label class="col-md-2 col-form-label" for="nome">Nome</label>
	<div class="col-md-4">
		<input name="nome" type="text" class="form-control" value="<?= (isset($devedor->nome)) ? $devedor->nome : ''?>" required/>
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="cpf_cnpj">CPF/CNPJ</label>
	<div class="col-md-4">
		<input name="cpf_cnpj" type="number" class="form-control" value="<?= (isset($devedor->cpf_cnpj)) ? $devedor->cpf_cnpj : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="data_nascimento">Data de Nascimento</label>
	<div class="col-md-4">
		<input name="data_nascimento" type="date" class="form-control" value="<?= (isset($devedor->data_nascimento)) ? $devedor->data_nascimento : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="endereco">Endereço</label>
	<div class="col-md-4">
		<input name="endereco" type="text" class="form-control" value="<?= (isset($devedor->endereco)) ? $devedor->endereco : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="descricao_titulo">Descrição Título</label>
	<div class="col-md-4">
		<input name="descricao_titulo" type="text" class="form-control" value="<?= (isset($devedor->descricao_titulo)) ? $devedor->descricao_titulo : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="valor">Valor</label>
	<div class="col-md-4">
		<input name="valor" type="number" class="form-control" value="<?= (isset($devedor->valor)) ? $devedor->valor : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<label class="col-md-2 col-form-label" for="data_vencimento">Data de Vencimento</label>
	<div class="col-md-4">
		<input name="data_vencimento" type="date" class="form-control" value="<?= (isset($devedor->data_vencimento)) ? $devedor->data_vencimento : ''?>" required />
	</div>
</div>

<div class="form-group row">
	<div class="col-md-6 text-right">
		<button type="submit" class="btn btn-success">Confirmar</button>
	</div>
</div>