<?php
if(!empty($_POST['nickname'])&& !empty($_POST["password"])){
    $nickname = $_POST['nickname'];
    $passwork = $_POST["password"];
    if($nickname == "administrador" && $passwork =="asd"){
        #echo "accedio como administrador";
        header("Location: padmin.php");
    }else{
        if($nickname == "cliente" && $passwork =="123"){
           // echo "accedio como cliente";
            header("Location: pcliente.php");
        }else{
            header("Location: error.php");
        } 
    }
}else{
    header("Location: error.php");
}