<?php
require_once '../Model/ExperienciaProfissional.php';

if (!isset($_SESSION)) {
    session_start();
}
class ExperienciaProfissionalController
{
    public function inserir($inicio, $fim, $empresa, $descricao, $idusuario)
    {
        
        $expP = new ExperienciaProfissional();
        $expP->setInicio($inicio);
        $expP->setFim($fim);
        $expP->setEmpresa($empresa);
        $expP->setDescricao($descricao);
        $expP->setIdUsuario($idusuario);
        if (method_exists($expP, 'inserir')) {
            return $expP->inserir();
        } elseif (method_exists($expP, 'cadastrar')) {
            return $expP->cadastrar();
        } elseif (method_exists($expP, 'salvar')) {
            return $expP->salvar();
        } elseif (method_exists($expP, 'create')) {
            return $expP->create();
        }
        return false;
    }
    public function remover($id)
    {
        $expP = new ExperienciaProfissional();
        // suportar diferentes nomes de método no modelo (remover, deletar, excluir)
        if (method_exists($expP, 'remover')) {
            return $expP->remover($id);
        } elseif (method_exists($expP, 'deletar')) {
            return $expP->deletar($id);
        } elseif (method_exists($expP, 'excluir')) {
            return $expP->excluir($id);
        }
        // método não encontrado: retornar falso para indicar falha
        return false;
    }
    public function gerarLista($idusuario)
    {
        $expP = new ExperienciaProfissional();
        // chamar método existente de listagem se disponível; proteger contra método indefinido
        if (method_exists($expP, 'listarExperiencias')) {
            $results = $expP->listarExperiencias($idusuario);
        } elseif (method_exists($expP, 'listar')) {
            // alguns modelos usam 'listar' e aceitam o id do usuário como parâmetro
            $results = $expP->listar($idusuario);
        } else {
            // fallback: retornar lista vazia se nenhum método de listagem existir
            $results = array();
        }
        return $results;
    }
}
?>