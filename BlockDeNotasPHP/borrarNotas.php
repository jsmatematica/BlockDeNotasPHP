<?php


    // for($i=0;$i<sizeof($_COOKIE['notas']);$i++){
    //     setcookie('notas['.$i.']','',time()-100);
    // }

    foreach ($_COOKIE['notas'] as $name => $value){
        setcookie('notas['.$name.']','',time()-100);
    }
header("Location: index.php");
die();

?>