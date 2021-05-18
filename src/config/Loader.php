<?php


    
function loadModel($modelName){
  
    require_once(MODEL_PATH."/{$modelName}.php");

}

function loadView($viewName, $parans = array() ){

    if(count($parans) > 0){
        foreach ($parans as $key => $value) {
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH."/{$viewName}.php");
}

function loadTemplateView($viewName, $parans = array()){

    if (count($parans) > 0) {
        
        foreach($parans as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }

    }
    require_once(TEMPLATE_PATH. "/headerloja.php");
    require_once(VIEW_PATH. "/{$viewName}.php");
    require_once(TEMPLATE_PATH. "/footer.php");


}



?>