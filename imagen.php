<?php
 
//conexion a la base de datos
include 'conectado.php';
 
//si la variable imagen no ha sido definida nos dara un advertencia.
$id = $_GET['id'];
$tabla = $_GET['t'];
$campo=$_GET['c'];
 
if ($id > 0){
    //vamos a crear nuestra consulta SQL
    $consulta = "SELECT * FROM ".$tabla." WHERE ".$campo." = ".$id;
    //con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
    //de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
    $resultado= @mysql_query($consulta) or die(mysql_error());
 
    //si el resultado fue exitoso
    //obtendremos el dato que ha devuelto la base de datos
    $datos = mysql_fetch_assoc($resultado);
 
    //ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
    $imagen = $datos['com_sico'];
    $tipo = $datos['tipo'];
     
    //ahora colocamos la cabeceras correcta segun el tipo de imagen
    header("Content-type: $tipo");
     
    echo $imagen;
}
 
?>