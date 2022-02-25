<?php
session_start();
require 'header.php';
require 'footer.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
	<script src="ajax.js"></script>
</head>
<body>

<?php
 header_func(); 
require("cart.php");
require("product.php");
?>
<?php include 'config.php';
?>

<?php 
// echo "aakash5<br>";
$cart = new Cart();

$cartItem = isset($_SESSION['cart'])?json_decode($_SESSION['cart']):array(); 

function display3()
{
	GLOBAL $cartItem;
    $html = ""; 
    $html .= "<table>";
    $html .= "<tr><th>PRODUCT ID</th><th>ITEM</th><th>PRICE</th><th>IMG SOURCE</th><th>QUANTITY</th><th>ACTION</th></tr>";
    foreach ($cartItem as $key => $value)
    {
        $html .= "<tr>"; 
        foreach($value as $key2 => $value2)
        {
                $html.= "<td>$value2</td>";                 
        }
     $html.= '<td> <a class="add-to-cart" href="">DELETE</a></td>';
   // $html.= '<td> <a class="add-to-cart" href="?id='.$value["pid"].'&action=delete">DELETE</a></td>';
        $html .= "</tr>";
    }
    $html .= "</table>";
	
   $html .= "</form>";
   return $html;
}

echo display3();


// echo "session array<br><pre>";
// print_r($cartItem);
// echo "</pre>session array<br>";

$cart->setCart($cartItem);

$product1 = new Product("product-101","football",150,"football.png");
$product2 = new Product("product-102","tennis",120,"tennis.png");
$product3 = new Product("product-103","basketball",90,"basketball.png");
$product4 = new Product("product-104","table-tennis",110,"table-tennis.png");
$product5 = new Product("product-105","soccer",80,"soccer.png");

$cart->addToCart($product1);

$cart->addToCart($product2);
$cart->addToCart($product2);
$cart->addToCart($product2);

$cart->addToCart($product3);
$cart->addToCart($product4);
$cart->addToCart($product5);

// echo "<pre>getcart";
// print_r($cart->getCart());
// echo "</pre>";



$_SESSION['cart'] = json_encode($cart->getCart());




// function display2()
// {
// 	GLOBAL $cart;
//     $html = ""; 
//     $html .= "<table>";
//     $html .= "<tr><th>PRODUCT ID</th><th>ITEM</th><th>PRICE</th><th>IMG SOURCE</th><th>QUANTITY</th><th>ACTION</th></tr>";
//     foreach ($cart->getCart() as $key => $value)
//     {
//         $html .= "<tr>"; 
//         foreach($value as $key2 => $value2)
//         {
//                 $html.= "<td>$value2</td>";                 
//         }
//      $html.= '<td> <a class="add-to-cart" href="">DELETE</a></td>';
//    // $html.= '<td> <a class="add-to-cart" href="?id='.$value["pid"].'&action=delete">DELETE</a></td>';
//         $html .= "</tr>";
//     }
//     $html .= "</table>";
	
//    $html .= "</form>";
//    return $html;
// }

// echo display2();



?>

<?php footer_func() ?>


</body>
</html>