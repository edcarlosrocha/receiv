<?php require_once BASE_DIR . '\front\header.php'; ?>

<div class="row">
	<div class="col-md-10">
		<h1>Listagem de Devedores</h1>
	</div>

	<div class="col-md-2">
		<a href="/novo" class="btn btn-success">Novo Registro</a>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-responsive table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>CPF/CNPJ</th>
					<th>Data de Nascimento</th>
					<th>Endereço</th>
					<th>Descrição do Título</th>
					<th>Valor</th>
					<th>Data de Vencimento</th>
					<th>Última Atualização</th>
					<th colspan="2">Opções</th>
				</tr>
			</thead>
			<tbody>
				<?php if(isset($dados) && count($dados) > 0): ?>
					<?php foreach($dados as $devedor): ?>
						<tr>
							<td><?= $devedor->nome; ?></td>
							<td><?= $devedor->cpf_cnpj; ?></td>
							<td><?= date('d/m/Y', strtotime($devedor->data_nascimento)); ?></td>
							<td><?= $devedor->endereco; ?></td>
							<td><?= $devedor->descricao_titulo; ?></td>
							<td><?= $devedor->valor; ?></td>
							<td><?= date('d/m/Y', strtotime($devedor->data_vencimento)); ?></td>
							<td><?= date('d/m/Y', strtotime($devedor->updated)); ?></td>
							<td>
								<a href="/editar/<?=$devedor->id?>">
									Editar
								</a>
							</td>
							<td>
								<a href="#" onClick="remover(<?=$devedor->id?>)">
									Remover
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				<?php else: ?>
					<tr>
						<td colspan="10">Nenhum registro encontrado</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<?php require_once BASE_DIR . '\front\footer.php'; ?>