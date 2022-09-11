<?php


function Conectar(){
    if(!($cnn = mysqli_connect("localhost","root",""))){
        exit();
    }
    if(! mysqli_select_db($cnn,"proyecto_citaciones")){
        exit();
    }
    return $cnn;

}


?>