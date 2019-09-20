<?php
require_once 'Crud.php';

class Alunos extends Crud{
	
	protected $table = 'cadaluno';
	private $estado;
	private $cidade;
	private $bairro;
	private $rua;
    private $numero;
    private $matricula;
    private $nome;
    private $dataNasc;
    private $idadeAnosMeses;
    private $horarioDeEntrada;
    private $horarioDeSaida;
    private $RA;
    private $alergias;
    private $medicamentos;
    private $tipoSanguineo;

    function getEstado() {
        return $this->estado;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getNome() {
        return $this->nome;
    }

    function getDataNasc() {
        return $this->dataNasc;
    }

    function getIdadeAnosMeses() {
        return $this->idadeAnosMeses;
    }

    function getHorarioDeEntrada() {
        return $this->horarioDeEntrada;
    }

    function getHorarioDeSaida() {
        return $this->horarioDeSaida;
    }

    function getRA() {
        return $this->RA;
    }

    function getAlergias() {
        return $this->alergias;
    }

    function getMedicamentos() {
        return $this->medicamentos;
    }

    function getTipoSanguineo() {
        return $this->tipoSanguineo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDataNasc($dataNasc) {
        $this->dataNasc = $dataNasc;
    }

    function setIdadeAnosMeses($idadeAnosMeses) {
        $this->idadeAnosMeses = $idadeAnosMeses;
    }

    function setHorarioDeEntrada($horarioDeEntrada) {
        $this->horarioDeEntrada = $horarioDeEntrada;
    }

    function setHorarioDeSaida($horarioDeSaida) {
        $this->horarioDeSaida = $horarioDeSaida;
    }

    function setRA($RA) {
        $this->RA = $RA;
    }

    function setAlergias($alergias) {
        $this->alergias = $alergias;
    }

    function setMedicamentos($medicamentos) {
        $this->medicamentos = $medicamentos;
    }

    function setTipoSanguineo($tipoSanguineo) {
        $this->tipoSanguineo = $tipoSanguineo;
    }    

    public function insert(){
        $sql  = "INSERT INTO $this->table (rua, cidade, matricula, nome, idadeAnosMeses, horarioDeSaida, dataNasc, estado, bairro, RA, numero, horarioDeEntrada, alergias, medicamentos, tipoSanguineo) VALUES (:rua, :cidade, :matricula, :nome, :idadeAnosMeses, :horarioDeSaida, :dataNasc, :estado, :bairro, :RA, :numero, :horarioDeEntrada, :alergias, :medicamentos, :tipoSanguineo)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':matricula', $this->matricula);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':idadeAnosMeses', $this->idadeAnosMeses);
        $stmt->bindParam(':horarioDeSaida', $this->horarioDeSaida);
        $stmt->bindParam(':dataNasc', $this->dataNasc);
        $stmt->bindParam(':RA', $this->RA);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':horarioDeEntrada', $this->horarioDeEntrada);
        $stmt->bindParam(':alergias', $this->alergias);
        $stmt->bindParam(':medicamentos', $this->medicamentos);
        $stmt->bindParam(':tipoSanguineo', $this->tipoSanguineo);
        return $stmt->execute(); 
    }

    public function update($id){
        $sql  = "UPDATE $this->table SET rua = :rua, cidade = :cidade, matricula = :matricula, nome = :nome, idadeAnosMeses = :idadeAnosMeses, horarioDeSaida = :horarioDeSaida, dataNasc = :dataNasc, estado = :estado, bairro = :bairro, RA = :RA, numero = :numero, horarioDeEntrada = :horarioDeEntrada, alergias = :alergias, medicamentos = :medicamentos, tipoSanguineo = :tipoSanguineo WHERE id = :id";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':rua', $this->rua);
        $stmt->bindParam(':cidade', $this->cidade);
        $stmt->bindParam(':matricula', $this->matricula);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':idadeAnosMeses', $this->idadeAnosMeses);
        $stmt->bindParam(':horarioDeSaida', $this->horarioDeSaida);
        $stmt->bindParam(':dataNasc', $this->dataNasc);
        $stmt->bindParam(':RA', $this->RA);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':bairro', $this->bairro);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':horarioDeEntrada', $this->horarioDeEntrada);
        $stmt->bindParam(':alergias', $this->alergias);
        $stmt->bindParam(':medicamentos', $this->medicamentos);
        $stmt->bindParam(':tipoSanguineo', $this->tipoSanguineo);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}