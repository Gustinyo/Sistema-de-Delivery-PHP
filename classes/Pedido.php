<?php
declare(strict_types=1);

class Pedido {

    private array $itens = [];

    public function __construct(
        private Cliente $cliente,
        private string $status
    ) {}

    public function adicionarItem(ItemPedido $item): void {

        $this->itens[] = $item;

      
        $item->getProduto()->diminuirEstoqueQuantidade(
            $item->getQuantidade()
        );
    }

    public function calcularTotal(): float {

        $total = 0;

        foreach ($this->itens as $item) {
            $total += $item->getSubtotal();
        }

        return $total;
    }

    public function quantidadeItens(): int {
        return count($this->itens);
    }

    public function verificarFreteGratis(): string {

        if ($this->calcularTotal() >= 50) {
            return "<span class='badge bg-success'>Frete Grátis</span>";
        }

        return "<span class='badge bg-warning text-dark'>Frete Pago</span>";
    }

    public function exibirPedido(): string {

        $html = "
        <div class='card p-4'>
            <h4>Pedido</h4>

            <p><strong>Cliente:</strong> {$this->cliente->getNome()}</p>
            <p><strong>Itens:</strong> {$this->quantidadeItens()}</p>

            <ul class='list-group mb-3'>
        ";

        foreach ($this->itens as $item) {
            $html .= $item->exibirItem();
        }

        $html .= "
            </ul>

            <p class='fw-bold text-success'>
                Total: R$ ".$this->calcularTotal()."
            </p>

            <p>".$this->verificarFreteGratis()."</p>

            <p><strong>Status:</strong> {$this->status}</p>
        </div>
        ";

        return $html;
    }
}
