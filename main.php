<?php 
session_start();

// $_SESSION['cart_list']=array();
if(isset($_POST['add_cart_butn']))
{
	$product_name=$_POST['product_name'];
	if(isset($_SESSION['cart_list']))
	{
      $size_cart=count($_SESSION['cart_list']);
      $_SESSION['cart_list'][$size_cart]=$product_name;
      print_r($_SESSION['cart_list']);
	}
	else
	{
		
        $_SESSION['cart_list'][0]=$product_name;
        print_r($_SESSION['cart_list']);

	}
  
  
}

?>