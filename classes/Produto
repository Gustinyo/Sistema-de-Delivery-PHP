<?php
declare(strict_types=1);

class Produto {

    public function __construct(
        private string $nome,
        private float $preco,
        private string $categoria,
        private int $estoque
    ) {}

    public function verificarEstoque(): string {

        if ($this->estoque > 0) {
            return "<span class='badge bg-success'>Disponível</span>";
        }

        return "<span class='badge bg-danger'>Indisponível</span>";
    }

    public function diminuirEstoqueQuantidade(int $quantidade): void {

        if ($this->estoque >= $quantidade) {
            $this->estoque -= $quantidade;
        }
    }

    public function getPreco(): float {
        return $this->preco;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function exibirProduto(): string {

        return "
        <div class='card p-3 h-100'>
            <h5>{$this->nome}</h5>
            <p><strong>Categoria:</strong> {$this->categoria}</p>
            <p class='text-success fw-bold'>R$ {$this->preco}</p>
            <p><strong>Estoque:</strong> {$this->estoque}</p>
            <p>".$this->verificarEstoque()."</p>
        </div>
        ";
    }
}
