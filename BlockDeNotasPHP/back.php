<?php

if(isset($_POST['nuevaNota'])){
    if(!isset($_COOKIE['notas'])){
        setcookie('notas['.date("H-i-s").']',$_POST['nuevaNota'],time() + 30*24*60*60*12);
    }else{
        setcookie('notas['.date("H-i-s").']',$_POST['nuevaNota'],time() + 30*24*60*60*12);
    }
}
header("Location: index.php");
die();




?>