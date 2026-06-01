<?php
require_once 'ConexaoBD.php';

class Inserir {
    private $idusuario;
    private $inicio;
    private $fim;
    private $empresa;
    private $descricao;

    public function __construct($idusuario, $inicio, $fim, $empresa, $descricao) {
        $this->idusuario = $idusuario;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->empresa = $empresa;
        $this->descricao = $descricao;
    }

    public function inserir($idusuario, $inicio, $fim, $empresa, $descricao) {
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim, empresa, descricao)
            VALUES ('".$idusuario."','".$inicio."','".$fim."','".$empresa."','".$descricao."')";
        if ($conn->query($sql) === true) {
            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>