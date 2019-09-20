<?php

require_once 'Crud.php';

class Responsaveis extends Crud{
	
    protected $table = 'cadresponsaveis';
    private $nome;
    private $cpf;
    private $rg;
    private $profissao;
    private $celular;
    private $telefone;
    private $bairro;
    private $cep;
    private $rua;
    private $estado;
    private $cidade;
    private $email;
    private $codAluno;

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getProfissao() {
        return $this->profissao;
    }

    function getCelular() {
        return $this->celular;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCep() {
        return $this->cep;
    }

    function getRua() {
        return $this->rua;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEmail() {
        return $this->email;
    }

    function getCodAluno() {
        return $this->codAluno;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setProfissao($profissao) {
        $this->profissao = $profissao;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCodAluno($codAluno) {
        $this->codAluno = $codAluno;
    }	

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, cpf, rg, profissao, celular, telefone, bairro, cep, rua, cidade, email, codAluno) VALUES (:nome, :cpf, :rg, :profissao, :celular, :telefone, :bairro, :cep, :rua, :cidade, :email, :codAluno)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':rg', $this->rg);
		$stmt->bindParam(':profissao', $this->profissao);
        $stmt->bindParam(':celular', $this->celular);
        $stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':codAluno', $this->codAluno);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome, cpf = :cpf, rg = :rg, profissao = :profissao, celular = :celular, telefone = :telefone, bairro = :bairro, cep = :cep, rua = :rua, cidade = :cidade, email = :email, codAluno = :codAluno WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':rg', $this->rg);
		$stmt->bindParam(':profissao', $this->profissao);
        $stmt->bindParam(':celular', $this->celular);
        $stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':codAluno', $this->codAluno);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}