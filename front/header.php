<?php
	$uri = explode('/', $_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Teste Para Desenvolvedor | Receiv</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="/">Home</a>
					</li>
					<?php if(isset($uri[1]) && ! empty($uri[1])): ?>
						<li class="breadcrumb-item active" aria-current="page">
							<?= ucwords($uri[1]); ?>
						</li>
					<?php endif; ?>
				</ol>
			</nav>
		</div>
		<div class="container"><br />
				
