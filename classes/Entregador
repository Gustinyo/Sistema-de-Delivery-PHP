<?php
declare(strict_types=1);

class Entregador {

    public function __construct(
        private string $nome,
        private string $veiculo,
        private bool $disponivel
    ) {}

    public function verificarDisponibilidade() {

        if ($this->disponivel) {
            return "Disponível";
        } else {
            return "Ocupado";
        }
    }

    public function exibirEntregador() {

        return "
        <div class='card p-3 mb-3'>
            <h5>Entregador</h5>
            <p><strong>Nome:</strong> {$this->nome}</p>
            <p><strong>Veículo:</strong> {$this->veiculo}</p>
            <p><strong>Status:</strong> ".$this->verificarDisponibilidade()."</p>
        </div>
        ";
    }
}