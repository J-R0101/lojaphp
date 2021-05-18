<?php  
    session_start();
    loadModel('Carrinho');
    loadModel('CarrinhoModel');
    if(isset($_SESSION['idProduto'])){
        
        session_destroy();
    }

    if(isset($_GET['delete'])){

        Carrinho::deletebyid($_GET['delete']);

    }
    if($_POST['Up']){
        $carprods = [];
        $idcar = $_POST['id'];
        $car = Carrinho::getOne(['id'=>$idcar]);
        $carprods = $car->getValues();
        print_r($carprods);
        $carprods['quantidadeprodcar']++ ;

        $carprods->update();
        
     }
     
     $listaCar = CarrinhoModel::listaCarrinho();

    
   
loadView('CarrinhoView',['listacarrinho'=>$listaCar]);

?>