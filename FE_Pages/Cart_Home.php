<?php

session_start();
$cake_id = $_GET["id"];
$quantity = $_GET["qty"];
$_SESSION['addcart'][$cake_id] = array("id"=>$cake_id,"qty"=>$quantity);
echo "<script>window.location.assign('Show_Cart_Home.php');</script>";
header("Location:Show_Cart_Home.php");



?>