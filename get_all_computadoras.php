<?php
require_once('includes/computadora.php');

 if($_SERVER['REQUEST_METHOD'] == 'GET'){
    computadora::get_all_computadoras();
 }

?>