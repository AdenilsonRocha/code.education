<?php

/**
 * Created by PhpStorm.
 * User: adenilson
 * Date: 02/01/2016
 * Time: 10:11
 */
class Aluno
{
    private $idAluno;
    private $nome;
    private $nota;
    private $db;

    public function __construct(\PDO $db){
        $this->db = $db;
    }
    public function find($id){
        $query = "select * from aluno WHERE id=:id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);

    }

    public function insere(){
        $sql = "INSERT INTO aluno(nome,nota)values(:nome, :nota)";
        $stmt = $this->db->query($sql);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':nota', $this->getNome());
        if($stmt->execute()){
            return true;
        }else{
            return $stmt->errorCode();
        }


    }
    public function delet($id){
        $sql ="Delet from aluno where idAluno = :id";
        $stmt = $this->db->query($sql);
        $stmt->bindValue(':id',$id);
        if($stmt->execute()){
            return true;
        }else{
            return $stmt->errorCode();
        }


    }
    public function altera($id){
        $sql = "UPDATE `aluno` SET `idAluno`=:id,`nome`=:nome,`nota`=:nota ";
        $stmt = $this->db->query($sql);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':nome', $this->getNome());
        $stmt->bindValue(':nota', $this->getNota());
        if($stmt->excute()){
            return true;
        }else{
            return $stmt->errorCode();
        }


    }
    public function consulta(){
        $sql = "Select * from aluno";
        $stmt= $this->db->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public function getIdAluno()
    {
        return $this->idAluno;
    }

    /**
     * @param mixed $idAluno
     */
    public function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }



    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * @param mixed $nota
     */
    public function setNota($nota)
    {
        $this->nota = $nota;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }




}
