<?php


if(isset($_GET['login']) and isset($_GET['password'])){
    $l=$_GET['login'];
    $p=$_GET['password'];
    if ($l=="admin" and    $p=="admin")
        echo "vous êtes connecté ";
    else
        echo "login/pass incorrect";
}
else
header("location:EX1.php");

?>

