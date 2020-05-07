<?php require_once BASE_DIR . DS . 'front' . DS . 'header.php'; ?>
<?php $devedor = (object) $dados;?>
<div class="row">
	<div class="col-md-12">
		<h1>Editar Registro</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form method="POST" action="/atualizar/<?= $devedor->id; ?>">
			<?php require_once BASE_DIR . DS .'front' . DS . 'devedores' . DS . 'form.php'; ?>
		</form>
	</div>
</div>

<?php require_once BASE_DIR . DS . 'front' . DS . 'footer.php'; ?>