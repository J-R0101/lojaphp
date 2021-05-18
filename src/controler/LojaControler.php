<?php
session_start();
loadModel('CarrinhoModel');
     if(isset($_SESSION['idProduto'])){
         

         $idproduto = (int) $_REQUEST['idProduto'];
         unset($_SESSION['idProduto']);
         
         //insert e check para não repetir produto na tabela do carrinho
         $checkcar= CarrinhoModel::checkcarrepete($idproduto);
        
     }
loadModel('Produtos');
//lista de produtos
$prod = Produtos::get();
//quantidades de produtos no carrino
$carquanti = CarrinhoModel::listaCarrinho();
$quantcar =count($carquanti);



loadTemplateView('LojaView',['prod' => $prod, 'quantcar'=>$quantcar]);
     
?>