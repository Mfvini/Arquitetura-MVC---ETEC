<?php
require_once 'ConexaoBD.php';
class CarregarAdministrador
{
    public $id;
    public $nome;
    public $cpf;
    public $senha;

    public function carregarAdministrador($cpf) {
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM administrador WHERE cpf = ".$cpf ;
        $re = $conn->query($sql);
        $r = $re->fetch_object();
        if($r != null) {
            $this->id = $r->idadministrador;
            $this->nome = $r->nome;
            $this->cpf = $r->cpf;
            $this->senha = $r->senha;
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>