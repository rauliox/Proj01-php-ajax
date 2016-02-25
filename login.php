<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
        <script src="js/ajax.js"> </script>
        <style>
            .fa{
                display: none;
            }
        </style>
    </head>
    <body>
<?php
//$_SESSION['usuario']
session_start();
if( isset($_SESSION['usuario'])){
        header('Location: index.php');
    //echo "Bienvenido".$_SESSION['usuario'];
    }
else{
   //header('Location: login.php');
}

?>

        <div class="container">
                <div class="row">
                  <div class="col-sm-4">
                  </div>
                  <div class="col-sm-4">
                    <h3 style="text-align: center;">Inicio de Sesión</h3>
                   
                    <form id="logeo">
                            <div class="form-group">
                           <label for="usr">Usuario: </label>
                           <input type="text" class="form-control" name="usuario" id="usr">
                         </div>
                         <div class="form-group">
                           <label for="pwd">Password: </label>
                           <input type="password" class="form-control" name="password" id="pwd" />
                         </div> 
                           <center> <input type="submit" value="Enviar" class="btn btn-default" id="boton" /></center>
                           <i class="fa fa-refresh fa-spin"></i>
                    </form>
                    
                  </div>
                  <div class="col-sm-4">
                 
                  </div>
                </div>
                     <div class="row" id="msj">
                
             </div>
            <span></span>
            </div>
     <?PHP
    echo "<pre>"; 
    echo $_SESSION['usuario'];
  //$vars = get_defined_vars();  
  //print_r($vars);  
    echo "</pre>"; 
    
        
  

    ?>
    </body>
</html>
