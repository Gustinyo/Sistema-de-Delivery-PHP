<?php
declare(strict_types=1);

class Cliente {

    public function __construct(
        private string $nome,
        private string $telefone,
        private string $endereco
    ) {}

    public function getNome(): string {
        return $this->nome;
    }

    public function exibirCliente(): string {

        return "
        <div class='card p-3 mb-3'>
            <h5>Cliente</h5>
            <p><strong>Nome:</strong> {$this->nome}</p>
            <p><strong>Telefone:</strong> {$this->telefone}</p>
            <p><strong>Endereço:</strong> {$this->endereco}</p>
        </div>
        ";
    }
}
