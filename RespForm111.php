<?php
class CarrinhoDeCompras
{
var $itens; // Itens no carrinho de compras
// Adicionar $num artigos do $artigo ao carrinho
function adiciona_item ($artigo, $num)
{
$this->itens[$artigo] = $num;
}
// Retirar $num artigos do $artigo do carrinho
function remove_item ($artigo, $num)
{
if ($this->itens[$artigo] > $num)
{
$this->itens[$artigo] -= $num;
return true;
}
else
{
return false;
}
}
} // fecha classe
$carrinho = new CarrinhoDeCompras;
$carrinho->adiciona_item("shorts", 12);
$carrinho->adiciona_item("bermuda",5);
$carrinho->adiciona_item("camiseta",5);
echo "O carrinho possui " . $carrinho->itens["shorts"] . " shorts. <br>";
echo "O carrinho possui " . $carrinho->itens["bermuda"] . " bermudas. <br>";
echo "O carrinho possui " . $carrinho->itens["camiseta"] . " camisetas. <br> <br>";
$carrinho->remove_item("bermuda",2);
echo "O carrinho possui " . $carrinho->itens["shorts"] . " shorts. <br>";
echo "O carrinho possui " . $carrinho->itens["bermuda"] . " bermudas. <br>";
echo "O carrinho possui " . $carrinho->itens["camiseta"] . " camisetas. <br>";
?>