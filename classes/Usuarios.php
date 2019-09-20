<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'cadusuario';
	private $nome;
	private $email;
	private $cpf;
	private $senha;
	private $tipo_usuario;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getEmail(){
		return $this->email;
	}
	
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setTipo_usuario($tipo_usuario){
		$this->tipo_usuario = $tipo_usuario;
	}

	public function getTipo_usuario(){
		return $this->tipo_usuario;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email, cpf, senha, tipo_usuario) VALUES (:nome, :email, :cpf, :senha, :tipo_usuario)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':tipo_usuario', $this->tipo_usuario);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, email = :email, cpf = :cpf, senha = :senha, tipo_usuario = :tipo_usuario WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':tipo_usuario', $this->tipo_usuario);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}