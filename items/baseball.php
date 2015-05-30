<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="Jade Marucut">

<title>XLII CYCLE</title>
<!-- CSS STYLESHEETS -->
<link href="../css/xlii.css" rel="stylesheet" type="text/css" media="screen">

<link href='http://fonts.googleapis.com/css?family=Allerta+Stencil|Text+Me+One' rel='stylesheet' type='text/css'>

</head>

<body>

<header>
  <div id="head" title="Your answer to life, the universe, and everything."><a href="../index.html">XLII CYCLE</a></div>
  <nav>
      <ul>
        <li><a href="../index.html" title="Your answer to life, the universe, and everything.">Home</a></li>
          <li><a href="../clothing.html" title="Buy the answer to clothing.">Clothing</a></li>
        <li><a href="../accessories.html" title="Your answer to accessorizing.">Accessories</a></li>
        <li><a href="#" class="cart" title="Your cart to life, the universe, and everything.">Cart</a></li>
      </ul>
  </nav>
</header>

<div class="container">
<a href="../clothing.html">< Back</a>
<!-- MAIN CONTENT -->
<div id="content">

  <div id="prodDetailContent">
  <img src="../images/clothes/baseball_01_large.png">
  </div><!--/productDetCont -->

  <div id="productDetail">
    <div id="prodOptions">
    <h2>XLII Baseball</h2>
    <h2>$30.00</h2>
    &nbsp;

    <form action="connect.php" method="POST">
    <p>Size:
      <input type="radio" name="size" value="small"> Small
      <input type="radio" name="size" value="medium"> Medium
      <input type="radio" name="size" value="large"> Large
      <input type="radio" name="size" value="x-large"> X-large
      <input type="radio" name="size" value="xx-large"> XX-large
      </p></form><br>

    <p>Color:
    <input type="radio" name="color" value="black"> Black
    <input type="radio" name="color" value="blue"> Blue
    <input type="radio" name="color" value="red"> Red
    <input type="radio" name="color" value="white"> White
    </p></form><br>

      <p>Quantity:
        <select name="quantity">
        <option value="1" name="amt">1</option>
        <option value="2" name="amt">2</option>
        <option value="3" name="amt">3</option>
        <option value="4" name="amt">4</option>
        <option value="5" name="amt">5</option>
        </select>
      </p>
      <br>
      <input id="addItem" class="btn" type="submit" name="addItem" value="Add to Cart">
    </form>
    <!-- <button type="submit" class="btn" value="submit" name="addItem">ADD TO CART</button> -->
    </div><!--/prodOptions-->

    <h2>Details</h2>
    SKU: 1<br>
    Materials: 50/50 blend
  </div><!--/proddetail-->

</div><!--/Content-->

<?php
session_start();
include_once("connect.php");

if (!isset($_POST['addItem'])) {
  echo "working";
  $search_size = $_POST['size'];
  $search_color = $_POST['color'];
  //$search_amt = $_GET['amt'];

  $addingSize = mysqli_query($conn,"SELECT * FROM 'products' WHERE 'prod_name' like '%$search_size%'");
  $addingColor = mysqli_query($conn,"SELECT * FROM 'products' WHERE 'prod_color' like '%$search_color%'");
  //$addingAmt = mysqli_query($conn,"SELECT * FROM 'products' WHERE 'prod_name' like '%$search_size%'");

  //fetch info and put into cart

  //mysqli_fetch_array(result,resulttype);
  while($row=mysqli_fetch_array($conn,MYSQLI_BOTH)){
    $price = $row['price'];
    $name = $row['prod_name'];
    $size = $row['prod_size'];
    $color = $row['prod_color'];

    echo "
    <section class='jobItem'>
      <div class='jobRight'>
        <h2>$position</h2>
        <h3>$company - $location</h3>
        <p>$desc</p>
        <h4><a href='$link'>$link</a></h4>
      </div>
    </section>
    ";
  }
}

?>

<!-- /MAINCONTENT -->
</div><!-- /CONTAINER -->

<footer>
&copy; XLII Jade Marucut 2015
<div class="terms"><a href="#"> Terms and Conditions</a> &nbsp; <a href="#"> About</a> &nbsp; <a href="#">Contact</a></div>
</footer>
</body>



</html>











  <script>

$('#thumbs').delegate('img','click', function(){
	$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description').html($(this).attr('alt'));
});

</script>
</body>
</html>
