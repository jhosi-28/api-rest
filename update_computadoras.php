<?php 
require_once('includes/computadora.php');
 
if($_SERVER['REQUEST_METHOD']== 'PUT' 
&& isset($_GET['id'])  
&& isset($_GET['nombre_modelo'])
&& isset($_GET['fabricante']) 
&& isset($_GET['precio'])
&& isset($_GET['procesador'])){
    computadora::update_computadoras($_GET['id'], $_GET['nombre_modelo'], $_GET['fabricante'], $_GET['precio'], $_GET['procesador']);
}
?>