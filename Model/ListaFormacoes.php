<?php
require_once 'ConexaoBD.php';

class ListaFormacoes {
    public function listaFormacoes($idusuario){
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM formacaoAcademica";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>