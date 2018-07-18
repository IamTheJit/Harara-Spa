<?php
    $db = new mysqli('localhost','root','root','harara');
    if($db->connect_error){
        $error = $db->connect_error;    
    }
?>