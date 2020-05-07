<?php

require_once 'config.php';
define('BASE_DIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);

// Autoload
function carrega_classes(string $nome_classe) {
	$nome_classe = str_replace('\\', DS, $nome_classe);
	$arquivo = BASE_DIR . DS . $nome_classe . '.php';
    require_once ($arquivo);
}
spl_autoload_register("carrega_classes");
// ~ Autoload

$uri = explode('/', $_SERVER['REQUEST_URI']);

$controller = new App\Controllers\DevedorController();

switch ($uri[1]) {
	case 'novo':
		$controller->novo();
		break;

	case 'cadastrar':
		$request = $_POST;
		$controller->cadastrar($request);
		break;

	case 'editar':
		$id = (int) $uri[2];
		$controller->editar($id);
		break;

	case 'atualizar':
		$id = (int) $uri[2];
		$request = $_POST;
		$controller->atualizar($id, $request);
		break;
	
	case 'remover':
		$id = (int) $uri[2];
		$controller->remover($id);
		break;	

	default:
		$controller->index();
		break;
}

