<?php

namespace App\Models;

class Devedor
{
	private $conn;

	public function __construct()
	{
		try {
			$this->conn = new \PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASS);
			$this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
		} catch (\PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
	}

	public function listar_todos()
	{
		$stmt = $this->conn->prepare('SELECT * FROM devedores');
    	$devedores = $stmt->execute();
    	return $stmt->fetchAll(\PDO::FETCH_OBJ);
	}

	public function listar_um(int $id)
	{
		$stmt = $this->conn->prepare('SELECT * FROM devedores WHERE id = :id LIMIT 1');
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
    	$devedor = $stmt->execute();
    	return $stmt->fetch(\PDO::FETCH_ASSOC);
	}

	public function cadastrar(array $request):bool
	{
		extract($request);
		$stmt = $this->conn->prepare('INSERT INTO devedores(`nome`, `cpf_cnpj`, `data_nascimento`, `endereco`, `descricao_titulo`, `valor`, `data_vencimento`) VALUES (:nome, :cpf_cnpj, :data_nascimento, :endereco, :descricao_titulo, :valor, :data_vencimento)');
		$stmt->bindParam(':nome', $nome, \PDO::PARAM_STR);
		$stmt->bindParam(':cpf_cnpj', $cpf_cnpj, \PDO::PARAM_INT);
		$stmt->bindParam(':data_nascimento', $data_nascimento, \PDO::PARAM_STR);
		$stmt->bindParam(':endereco', $endereco, \PDO::PARAM_STR);
		$stmt->bindParam(':descricao_titulo', $descricao_titulo, \PDO::PARAM_STR);
		$stmt->bindParam(':valor', $valor, \PDO::PARAM_STR);
		$stmt->bindParam(':data_vencimento', $data_vencimento, \PDO::PARAM_STR);

		if($stmt->execute()) {
			return true;
		}

		return false;
	}

	public function atualizar(int $id, array $request):bool
	{
		extract($request);
		$stmt = $this->conn->prepare('UPDATE devedores SET nome = :nome, cpf_cnpj = :cpf_cnpj, data_nascimento = :data_nascimento, endereco = :endereco, descricao_titulo = :descricao_titulo, valor = :valor, data_vencimento = :data_vencimento, updated = NOW() WHERE id = :id');
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
		$stmt->bindParam(':nome', $nome, \PDO::PARAM_STR);
		$stmt->bindParam(':cpf_cnpj', $cpf_cnpj, \PDO::PARAM_INT);
		$stmt->bindParam(':data_nascimento', $data_nascimento, \PDO::PARAM_STR);
		$stmt->bindParam(':endereco', $endereco, \PDO::PARAM_STR);
		$stmt->bindParam(':descricao_titulo', $descricao_titulo, \PDO::PARAM_STR);
		$stmt->bindParam(':valor', $valor, \PDO::PARAM_STR);
		$stmt->bindParam(':data_vencimento', $data_vencimento, \PDO::PARAM_STR);

		if($stmt->execute()) {
			return true;
		}

		return false;
	}

	public function remover(int $id)
	{
		$stmt = $this->conn->prepare('DELETE FROM devedores WHERE id = :id');
		$stmt->bindParam(':id', $id, \PDO::PARAM_INT);
    	return $stmt->execute();
	}
}