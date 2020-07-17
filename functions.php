<?php
// include('connect.php');

function urlImagem(){
    $url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
    return $url;
}



?>