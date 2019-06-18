<?php
 if(!isset($_GET['tipo'])){
    header("Location: ../index.php"); 
 }
 else if($_GET['tipo'] == 'EstudoValue'){
    include('../Estudos-API/index.php');
 }



?>