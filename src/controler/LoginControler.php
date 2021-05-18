<?php
session_start();
 loadModel('LoginModel');
 
 $exception = null;

 if(count($_POST) > 0){
   
   $login = new Login($_POST);
   
   try{
     
     $user = $login->checkLogin();
     header("Location:LojaControler.php");
     
    }catch(AppException $e){
      $exception = $e;
    }
    
  }
  
  loadView('LoginView', $_POST + ['exception'=>$exception]);
  

?>