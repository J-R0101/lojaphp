
<?php session_start();

    include(TEMPLATE_PATH."/messages.php");

?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adega livery</title>
    
    <link rel="shortcut icon" type="/image/x-icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loja.css">
    

</head>
<body>

<header class="topo" id="topo">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a href="LojaControler.php" class="navbar-brand"><h1>Loja</h1></a>
               
               <div class="row">
               <a  href="?delete=0" class="btn btn-default bg-primary col mr-2">
                    <i class="fa fa-shopping-cart" aria-hidden="true">Limpar Carrinho</i>
                </a>
                <button type="button" data-toggle="modal" data-target="#modalcompra" class="btn btn-default bg-primary col">
                    <i class="fa fa-shopping-cart" aria-hidden="true">Compras</i>
                </button>
                </div>
            </div>
        </nav>
        <div class="container">
            <canvas id="beerCanvas"></canvas>
        </div>
    </div>
</header>


<?php foreach ($listacarrinho as $value):?>
<div class="container">
 <article>

   <div class="row">
   <div > </div>
   <div > </div> 
   <div class="mr-2 col">  <label for=""><?=$value->nomeprodcar?></label>
         
     </div> 
     <div class="col">
     <div class="container_quantidade">
      <div class="mr-2"><form class="form_Up" action="" method="post"><input class="inputUp btn" name="+" type="submit" value="+">
      <input type="hidden" name="Up" Value="1">
      <input type="hidden" name="id" value="<?=$value->id?>">
      <input type="hidden" name="idprodcar" value="<?=$value->idprodcar?>">
      <input type="hidden" name="nomeprod" value="<?=$value->nomeprodcar?>">
      <input type="hidden" name="valorprod" value="<?=$value->valorprodcar?>">
      <input type="hidden"  name="qtd" value="<?=$value->quantidadeprodcar?>">
      </form></div> 
      <div><input class="qtd_style text-center" type="tel" name="qtd" value="<?=$value->quantidadeprodcar?>" readonly></div>
      <div class="ml-2"><input class="inputDow btn" name="-" type="submit" value="-"></div>
      </div>
      </div>
   <div class="mr-2 col"> 
       <label for=""><?=number_format( $value->valorprodcar,2,',','.');?></label>  
        
       </div>
   <div class="col">
        <a class="btn btn-danger" type="submit" href="?delete=<?=$value->id?>">Excluir</a>
        <input class="btn btn-primary" type="submit" value="Comprar" >   
   </div> 

    </div>
    <hr>
 

 </article>

<?php endforeach ?>
  

 <div class="modal fade" id="modalcompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
     <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Efetuar Compra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php foreach ($listacarrinho as $value):?>
        <div class="row" >
        <div class="col-5">
        <?=$value->nomeprodcar?>
        <?=$value->quantidadeprodcar?>
        <?=number_format( $value->valorprodcar,2,',','.');?>
        </div>
        </div>
         <?php $valor += $value->valorprodcar; ?>
        <?php endforeach ?>
        <div class="row">
          <div class="col" > <i class="fa fa-credit-card"><input class="ml-2" type="radio" value="Credito" name="Pagamento">Credito</i></div>
         <div class="col" > <i class="fa fa-barcode"><input class="ml-2" type="radio" value="Credito" name="Pagamento">Boleto</i></div>
        
        </div>
        <div class="col-3">total = <?php echo number_format( $valor,2,',','.');; ?></div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
 
 </div>
   
</div>
        </div>

        </div>
<footer class="rodapecar">Desenvolvido por Jreis@</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="jQuery/jquery-3.6.0.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vanilla-tilt.js"></script>
<script src="js/script.js"></script>
<script src="js/form.js"></script>


             <script>
                VanillaTilt.init(document.querySelectorAll(".cardl"), {
		                     max: 25,
		                     speed: 400,
                             
                          
                        	});   

            </script>
            
            
            
</body>

</html>