<?php
include '../../conexao/Conexao.php';

class Usuario extends Conexao{
	private $razaoSocial;
    private $cnpj;
    private $inscricaoEstadual;
    private $fone;
    private $enderecoCompleto;
    private $senha;

    function getRazaoSocial() {
        return $this->razaoSocial;
    }
    function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    function getCNPJ() {
        return $this->cnpj;
    }
    function setCNPJ($cnpj) {
        $this->cnpj = $cnpj;
    }

    function getInscricaoEstadual() {
        return $this->inscricaoEstadual;
    }
    function setInscricaoEstadual($inscricaoEstadual) {
        $this->inscricaoEstadual = $inscricaoEstadual;
    }

    function getFone() {
        return $this->fone;
    }
    function setFone($fone) {
        $this->fone = $fone;
    }

    function getEnderecoCompleto() {
        return $this->enderecoCompleto;
    }
    function setEnderecoCompleto($enderecoCompleto) {
        $this->enderecoCompleto = $enderecoCompleto;
    }

    function getSenha() {
        return $this->senha;
    }
    function setSenha($senha) {
        $this->senha = $senha;
    }



    public function insert($obj){
    	$sql = "INSERT INTO `login` (razaoSocial,cnpj,inscricaoEstadual,fone,enderecoCompleto,senha) VALUES (:razaoSocial,:cnpj,:inscricaoEstadual,:fone,:enderecoCompleto,:senha)";
    	$consulta = Conexao::prepare($sql);
        $consulta->bindValue('razaoSocial',  $obj->razaoSocial);
        $consulta->bindValue('cnpj', $obj->cnpj);
        $consulta->bindValue('inscricaoEstadual' , $obj->inscricaoEstadual);
        $consulta->bindValue('fone' , $obj->fone);
        $consulta->bindValue('enderecoCompleto' , $obj->enderecoCompleto);
        $consulta->bindValue('senha' , $obj->senha);
    	return $consulta->execute();

	}

	public function update($obj,$id = null){
		$sql = "UPDATE `login` SET razaoSocial = :razaoSocial, cnpj = :cnpj,inscricaoEstadual = :inscricaoEstadual, fone = :fone,enderecoCompleto =:enderecoCompleto, senha = :senha WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('razaoSocial', $obj->razaoSocial);
		$consulta->bindValue('cnpj', $obj->cnpj);
		$consulta->bindValue('inscricaoEstadual' , $obj->inscricaoEstadual);
		$consulta->bindValue('fone', $obj->fone);
		$consulta->bindValue('enderecoCompleto' , $obj->enderecoCompleto);
		$consulta->bindValue('senha' , $obj->senha);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($obj,$id = null){
		$sql =  "DELETE FROM `login` WHERE id = :id";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('id',$id);
		$consulta->execute();
	}

	public function find($id = null){

	}

	public function findAll(){
		$sql = "SELECT * FROM `login`";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		return $consulta->fetchAll();
	}

}

?>