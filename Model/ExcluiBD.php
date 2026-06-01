<?php
require_once 'ConexaoBD.php';

class ExcluiBD
{
    public function excluirBD($id)
    {
        $con = new ConexaoBD();
        $conn = $con->conectar();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional = '" . $id . "';";
        if ($conn->query($sql) === true) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>