<?php
    session_start();
    echo "<pre>"; 
    echo $_SESSION['usuario'];
  //$vars = get_defined_vars();  
  //print_r($vars);  
    echo "</pre>"; 
    
     session_destroy();
      //  header('Location: login.php');
   
        
 ?>