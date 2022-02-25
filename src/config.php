<?php    


$array_of_object = array(
    array(
      "id" => "product-101",
      "name" => "football",
      "image" => "football.png",
      "price" => 150
    ),
    array(
      "id" => "product-102",
      "name" => "tennis",
      "image" => "tennis.png",
      "price" => 120
    ),
    array(
      "id" => "product-103",
      "name" => "basketball",
      "image" => "basketball.png",
      "price" => 90
    ),
    array(
      "id" => "product-104",
      "name" => "table-tennis",
      "image" => "table-tennis.png",
      "price" => 110
    ),
    array(
      "id" => "product-105",
      "name" => "soccer",
      "image" => "soccer.png",
      "price" => 80
    ),
  
);


?>
	<div id="main">
	<div id="products">
  <script src="ajax.js"></script>
<?php
// foreach($array_of_object as $k1 => $v1)
// {   
//     echo '<div id="'.$v1["id"].'" class="product">
//         <img src="/images/'.$v1["image"].'" name = "/images/'.$v1["image"].'">
//         <h3 class="title">
//         <a href="#">'.$v1["id"].'</a>
//         </h3>
//         <span>Price: '.$v1["price"].'</span>     
//         <a class="add-to-cart" href="?id='.$v1["id"].'&price='.$v1["price"].'&image='.$v1["image"].'&name='.$v1["name"].'">Add To Cart</a>
//         </div>';
// }

foreach($array_of_object as $k1 => $v1)
{   
    echo '<div id="'.$v1["id"].'" class="product">
        <img src="/images/'.$v1["image"].'" name = "/images/'.$v1["image"].'">
        <h3 class="title">
        <a href="#">'.$v1["id"].'</a>
        </h3>
        <span>Price: '.$v1["price"].'</span>     
        <a class="add-to-cart" href = "#" data-id="'.$v1["id"].'" >Add To Cart</a>
        </div>';
}
?>
<script>		
$(document).on('click', '.add-to-cart', function (e) {
    e.preventDefault();

    var id = $(this).attr('data-id');

    alert(id);
});
</script>
	</div>
	</div>
