<?php require_once BASE_DIR . '\front\header.php'; ?>

<div class="row">
	<div class="col-md-12">
		<h1>Novo Registro</h1>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<form class="form" method="POST" action="/cadastrar">
			<?php require_once BASE_DIR . '\front\devedores\form.php'; ?>
		</form>
	</div>
</div>

<?php require_once BASE_DIR . '\front\footer.php'; ?>