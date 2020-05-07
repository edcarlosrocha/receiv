<?php require_once BASE_DIR . DS . 'front' . DS . 'header.php'; ?>

<div class="row">
	<div class="col-md-12">
		<h1>Novo Registro</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="form" method="POST" action="/cadastrar">
			<?php require_once BASE_DIR . DS .'front' . DS . 'devedores' . DS . 'form.php'; ?>
		</form>
	</div>
</div>

<?php require_once BASE_DIR . DS . 'front' . DS . 'footer.php'; ?>