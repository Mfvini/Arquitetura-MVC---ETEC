<?php
require_once '../Model/Administrador.php';

if (!isset($_SESSION)) {
    session_start();
}
class AdministradorController
{
    public function login($cpf, $senha)
    {
        $administrador = new Administrador();

        if (method_exists($administrador, 'carregarAdministrador')) {
            $administrador->carregarAdministrador($cpf);
        } elseif (method_exists($administrador, 'carregarPorCpf')) {
            $administrador->carregarPorCpf($cpf);
        } elseif (method_exists($administrador, 'carregar')) {
            $administrador->carregar($cpf);
        } elseif (method_exists($administrador, 'buscarPorCpf')) {
            $administrador->buscarPorCpf($cpf);
        } else {
            return false;
        }

        if ($administrador->getSenha() == $senha) {
            $_SESSION['Administrador'] = serialize($administrador);
            return true;
        }

        return false;
    }
}
?>

