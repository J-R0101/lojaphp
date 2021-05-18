<?php


//print_r($prod);

foreach ($prod as $value):

?>

<div>
    <?=$value->nome?>
    <?=$value->valor?>

</div>

<?php endforeach ?>