<?php 
session_start();
$_SESSION['chart_list']=array();
if(isset($_POST['add_cart_butn']))
{
  $product_name=$_POST['product_name'];
  echo "$product_name";
  $_SESSION['product_name']=$product_name;
  
}
?>