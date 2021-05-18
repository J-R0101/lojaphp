<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//Pastas

define('MODEL_PATH', realpath(dirname(__FILE__) . '/../model'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../view'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../view/template'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controler'));
define('APPEXCEPTION_PATH', realpath(dirname(__FILE__) . '/../appException'));




//Arquivos
require_once(realpath(dirname(__FILE__). '/Database.php'));
require_once(realpath(dirname(__FILE__). '/Loader.php'));
require_once(realpath(MODEL_PATH. '/Model.php'));
require_once(realpath(APPEXCEPTION_PATH. '/AppException.php'));
require_once(realpath(APPEXCEPTION_PATH. '/ValidationException.php'));


?>