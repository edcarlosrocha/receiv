<?php

namespace App\Views;

class DevedorView
{
	/**
	 * Exibe o template solicitado
	 * @param string $template | Nome do template a ser exibido
	 * @param array $dados | Valores a serem utilizados dentro do template
	 * @return void
	 */
	public function template(string $template, array $dados = []): void
	{
		require BASE_DIR . "/front/devedores/{$template}.php";
	} // ~ template
}