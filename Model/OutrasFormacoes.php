<?php

class OutrasFormacoes {

    // Atributos privados para encapsulamento
    private int $idOutrasFormacoes;
    private int $idUsuario;
    private ?string $inicio;
    private ?string $fim;
    private ?string $descricao;

    // Construtor
    public function __construct(
        int $idOutrasFormacoes = 0, 
        int $idUsuario = 0, 
        ?string $inicio = null, 
        ?string $fim = null, 
        ?string $descricao = null
    ) {
        $this->idOutrasFormacoes = $idOutrasFormacoes;
        $this->idUsuario = $idUsuario;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->descricao = $descricao;
    }

    // Getters e Setters
    public function getIdOutrasFormacoes(): int {
        return $this->idOutrasFormacoes;
    }

    public function setIdOutrasFormacoes(int $idOutrasFormacoes): void {
        $this->idOutrasFormacoes = $idOutrasFormacoes;
    }

    public function getIdUsuario(): int {
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function getInicio(): ?string {
        return $this->inicio;
    }

    public function setInicio(?string $inicio): void {
        $this->inicio = $inicio;
    }

    public function getFim(): ?string {
        return $this->fim;
    }

    public function setFim(?string $fim): void {
        $this->fim = $fim;
    }

    public function getDescricao(): ?string {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): void {
        $this->descricao = $descricao;
    }
}

?>