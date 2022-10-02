<?php
            session_start();
            if(!isset($_SESSION["logueado"]) || !$_SESSION["logueado"]){
                header("location:index.php");                
            }            
?>