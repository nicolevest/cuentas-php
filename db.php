<?php function conectar (){
   $server="localhost"; 
   $usuario="root";
   $password="";
   $database="toldopamba";
   $conn=mysqli_connect($server,$usuario,$password,$database); //se crea la conexion a la bd  
   if($conn->connect_error)
   {
       die("fallo en la conexión: ".$conn->connect_error);
   }  
   return $conn; 
}
function desconectar ($conn){
    return mysqli_close($conn);  
}