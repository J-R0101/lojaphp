<?php
session_start();
loadModel('Carrinho');
loadModel('Produtos');

class CarrinhoModel extends Model
{
   public static function prodCarrinho( int $idProdCarrinho){       
      
      $prod = Produtos::getOne(['id'=>$idProdCarrinho]);
      
      
      
      return $prod;
      
   
   }
    
   public static function checkcarrepete(int $idcar){
      
      $listcar = Carrinho::getOne(['idprodcar'=>$idcar]);
      $idlist = $listcar->idprodcar;
         
         if($idlist == $idcar){
           
         }
         else  {
            $prod = CarrinhoModel::prodCarrinho($idcar);
         
             self::insertCarrinho($prod);
         }
         

      }

   public static function insertCarrinho($arrycar){
      
      $arrayCar = array(
         'idprodcar' => $arrycar->id,
         'nomeprodcar' => $arrycar->nome,
         'valorprodcar' => $arrycar->valor,
         'quantidadeprodcar'=> 1,
         'imgprodcar' => $arrycar->img );     
 
      $carrinho = new Carrinho($arrayCar);
     
         
         $carrinho->insert();
 
   }

   public static function listaCarrinho(){

      $listaCarrinhoProduto = Carrinho::get();

      return $listaCarrinhoProduto;
   }
   
   


}



?>