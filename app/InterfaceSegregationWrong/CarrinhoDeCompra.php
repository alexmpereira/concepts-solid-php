<?php 
// Problema: A classe CarrinhoDeCompras depende diretamente da classe Produto.
class CarrinhoDeCompras {
    private $produtos;
  
    public function adicionarProduto(Produto $produto) {
      // Lógica para adicionar um produto ao carrinho.
    }
}

// Solução: Inverter a dependência utilizando uma interface compartilhada entre as classes de alto nível e baixo nível.
interface ProdutoInterface {
    public function getPreco();
}

class Produto implements ProdutoInterface {
    public function getPreco() {
        // Lógica para obter o preço do produto.
    }
}

class CarrinhoDeCompras {
    private $produtos;

    public function adicionarProduto(ProdutoInterface $produto) {
        // Lógica para adicionar um produto ao carrinho.
    }
}
  
?>