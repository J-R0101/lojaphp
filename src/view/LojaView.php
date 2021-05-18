<?php  session_start();     ?>
  
<div class="body">
  
    <div class="containerl ">
        <?php   foreach ($prod as $produtos):?>
            <div class="cardl mr-2 mb-2">
                
                <div class="contentl">
                    
                    
                    <img class="card-img-top"  src="imagens/FonteDoCeu.png" alt="">
                    
                    
                    <h5><?=$produtos->nome?></h5>
                    <div>R$ <?=number_format($produtos->valor,2,',','.');?></div>
                    

                    <button >Comprar</button>
                    <a href="?idProduto=<?=$_SESSION['idProduto']=$produtos->id;?>" ><i class="fa fa-shopping-cart"></i> Carrinho</a> 
                     
                </div>
            </div>
            
    <?php endforeach ?>
</div>

   
    </div>
            
            

