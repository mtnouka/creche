<?php

require_once 'Crud.php';

class Autorizacoes extends Crud{
	
	protected $table = 'cadautorizacoes';
	private $descricao;
	private $passeios;
    private $codAluno;
    
    function getDescricao() {
        return $this->descricao;
    }

    function getPasseios() {
        return $this->passeios;
    }

    function getCodAluno() {
        return $this->codAluno;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPasseios($passeios) {
        $this->passeios = $passeios;
    }

    function setCodAluno($codAluno) {
        $this->codAluno = $codAluno;
    }

	public function insert(){

		$sql  = "INSERT INTO $this->table (descricao, passeios, codAluno) VALUES (:descricao, :passeios, :codAluno)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':passeios', $this->passeios);
		$stmt->bindParam(':codAluno', $this->codAluno);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET descricao = :descricao, passeios = :passeios, codAluno = :codAluno WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':passeios', $this->passeios);
		$stmt->bindParam(':codAluno', $this->codAluno);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

    }

}