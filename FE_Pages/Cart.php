<?php

session_start();
$cake_id = $_GET["id"];
$quantity = $_GET["qty"];
if(isset($_SESSION["addcart"][$cake_id]))
{
	$_SESSION["addcart"][$cake_id]["qty"] += $quantity;
	
}

if(!isset($_SESSION["addcart"][$cake_id]))
{
	$_SESSION["addcart"][$cake_id] = array("id"=>$cake_id,"qty"=>$quantity);
}

echo "<script>window.location.assign('Show_Cart.php');</script>";
header("Location:Show_Cart.php");



?>