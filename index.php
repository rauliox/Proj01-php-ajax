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
if( $_SESSION['usuario'] == "raul"){
    
    echo "<h1>Aqui esta el sistema</h1>";
    //echo "Bienvenido".$_SESSION['usuario'];
    
}
else{
    header('Location: login.php');
}


?>

    <p><a href="#" id="logout">Salir</a></p>
    <p id="resultado"></p>

</body>
</html>