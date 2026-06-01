<?php
require_once 'ConexaoBD.php';

class ListarExperiencia
{
    public function listaExperiencias($idusuario)
    {
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM experienciaProfissional WHERE idusuario = '".$idusuario."'" ;
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}
?>