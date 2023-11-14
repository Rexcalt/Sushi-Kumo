<?php 
   
   $conexion = new mysqli_connect("localhost", "root","", "login_register_db");
   
   if(!$conexion){
    echo "Error de Conexion";
   }
   /*
    
    Comprobacion
 
   if ($conexion) {
            echo 'conectado exitosamente a la base de datos ';
   }else{
    echo 'Nose ha podido conectar de la base de datos';
    }*/
?>