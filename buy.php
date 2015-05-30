<?php
// Checking database for inventory
session_start();
include_once("connect.php");

$results = mysqli_query($conn,"SELECT * FROM products ORDER BY id ASC");

if ($results) {

        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
    echo '<div class="product">';
            echo '<form method="post" action="cart_update.php">';
            //echo '<div class="product-thumb"><img src="images/'.$obj->product_img_name.'"></div>';
            echo '<div class="product-content"><h3>'.$obj->prod_name.'</h3>';
            echo '<div class="product-desc">'.$obj->prod_desc.'</div>';
            echo '<div class="product-info">';
            echo 'Price '.$currency.$obj->price.' | ';
            echo 'Qty <input type="text" name="product_qty" value="1" size="3" />';
            echo '<button class="add_to_cart">Add To Cart</button>';
            echo '</div></div>';
            echo '<input type="hidden" name="product_code" value="'.$obj->id.'" />';
            echo '<input type="hidden" name="type" value="add" />';
            echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
            echo '</form>';
    echo '</div>';
        }

    }



?>