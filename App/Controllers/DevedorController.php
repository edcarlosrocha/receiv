<?php

namespace App\Controllers;
use App\Views\DevedorView;
use App\Models\Devedor;

class DevedorController
{
	/**
	 * Chama o model para listar os devedores no template da tela inicial
	 * @return void
	 */
	public function index(): void
	{
		$devedores = (new Devedor)->listar_todos();
		(new DevedorView)->template('lista', $devedores);
	} // ~ index


	/**
	 * Chama o template com formulário de cadastro
	 * @return void
	 */
	public function novo(): void
	{
		(new DevedorView)->template('novo');
	} // ~ novo


	/**
	 * Cadastra o novo registro no banco de dados
	 * @param array $request | informações enviadas pelo form de cadastro 
	 * @return void
	 */
	public function cadastrar(array $request): void
	{
		if ((new Devedor)->cadastrar($request)) {
			header("Location: /");
		} else {
			(new DevedorView)->template('novo', $request);
		}
	} // ~ cadastrar


	/**
	 * Chama o template com formulário de edição do id solicitado
	 * @param int $id Identificação do devedor 
	 * @return void
	 */
	public function editar(int $id): void
	{
		$devedor = (new Devedor)->listar_um($id);
		(new DevedorView)->template('editar', $devedor);
	} // ~ editar


	/**
	 * Cadastra o novo registro no banco de dados
	 * @param int $id | identificação do devedor
	 * @param array $request | informações enviadas pelo form de editar
	 * @return void
	 */
	public function atualizar(int $id, array $request): void
	{
		if ((new Devedor)->atualizar($id, $request)) {
			header("Location: /");
		} else {
			$this->editar($id);
		}
	} // ~ cadastrar


	/**
	 * Chama o template com formulário de edição do id solicitado
	 * @param int $id Identificação do devedor 
	 * @return void
	 */
	public function remover(int $id): void
	{
		(new Devedor)->remover($id);
		header("Location: /");
	} // ~ remover
}