<?php

require_once 'Crud.php';

class Anotacoes extends Crud{
	
	protected $table = 'cadanotacoes';
	private $dataAnotacao;
	private $nomeEscritor;
	private $descricao;
    private $codAluno;
    
    function getDataAnotacao() {
        return $this->dataAnotacao;
    }

    function getNomeEscritor() {
        return $this->nomeEscritor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getCodAluno() {
        return $this->codAluno;
    }

    function setDataAnotacao($dataAnotacao) {
        $this->dataAnotacao = $dataAnotacao;
    }

    function setNomeEscritor($nomeEscritor) {
        $this->nomeEscritor = $nomeEscritor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setCodAluno($codAluno) {
        $this->codAluno = $codAluno;
    }

	public function insert(){

		$sql  = "INSERT INTO $this->table (dataAnotacao, nomeEscritor, descricao, codAluno) VALUES (now(), :nomeEscritor, :descricao, :codAluno)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nomeEscritor', $this->nomeEscritor);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':codAluno', $this->codAluno);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nomeEscritor = :nomeEscritor, descricao = :descricao, codAluno = :codAluno WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nomeEscritor', $this->nomeEscritor);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':codAluno', $this->codAluno);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}