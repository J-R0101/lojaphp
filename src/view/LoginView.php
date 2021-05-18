<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>
 
         <form class="form-login" action="#" method="post">
             <div class="login-card card">
               <div class="card-header ">
                   <i class="fa fa-user-o fa-3x " aria-hidden="true" ><span class="ml-2">Login</span></i>
                   
               </div>
               <div class="card-body">
                  <?php include(TEMPLATE_PATH. '/messages.php') ?>


                     <div class="form-group">
                       
                       <input type="email" id="email" name="email" class="form-control text-center <?=$errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?>" placeholder="Informe o e-mail" autofocus>
                     
                       <div class="invalid-feedback">
                         <?=$errors['email']?>
                       </div>
                       
                       
                      </div>

                    <div class="form-group">
                       
                       <input type="password" id="password" name="password" class="form-control text-center <?=$errors['password'] ? 'is-invalid' : '' ?>" placeholder="Informe sua senha" >
                      
                       <div class="invalid-feedback">
                         <?=$errors['password']?>
                       </div>
                       
                    </div>

                    

               </div>
             <div class="card-footer">

                <div class="form-group ">
                    <button class="btn btn-block btn-outline-warning text-dark  ">Login</button>
                    
                    
                </div>

             </div>
             </div>
         </form>
              
           
                    
            
</body>
</html>