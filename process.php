<?php
session_start();

$tag = $_POST['tag'];


if(isset($tag) && $tag !== ''){
    
    if($tag == "login"){
        if($_POST['usuario'] === "raul"){
            
            $_SESSION['usuario']= "raul";
            //$valor1 = 30;
            //$valor2 = 40;
            //$valor3 = 40;
           // echo "<p>hola</p>";
           // $result = array ( 'nombre'=> 'raul');
            //$result['mensaje'] = "true";
            $result = 'hola';
            //echo $result;
            echo json_encode($result);
            
           }
        else{
            echo false;
        }
    }
    
    if($tag == "logout"){
        session_destroy();
        $resultado = 30;
        echo $resultado;
                      
    }
    
    else{
            echo false;
           // echo "falso";
        }
    
}
 


?>