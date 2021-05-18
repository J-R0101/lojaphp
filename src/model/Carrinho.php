<?php

 class Carrinho extends Model
 {
     protected static $tableName = 'carrinho';
     protected static $columns = [
        'id',
        'idprodcar',
        'nomeprodcar',
        'valorprodcar',
        'quantidadeprodcar',
        'imgprodcar'
     ];
 }
 



?>