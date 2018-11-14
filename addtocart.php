<link rel="stylesheet" href="style.css" >
<header>
    <div style="background-color: grey; height: 148px; font-size: 30px;">
    <p style="position: relative;top: 30%; text-align: center;font-family: monospace;">MyCart.com
    </p>
    <br>
<div class="navbar">
  <a href="database.php">Home</a>
  <a href="admin.php">Admin Panel</a>
  <a href="cart.php">My cart</a>
</div>
</div>
</header> 
<?php
    $conn = mysqli_connect("localhost","root","","product");
    $id = $_GET['id'];
    $sql = "Update product_details set cart = 1 where id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "Added to cart successfully";
        echo "<br><a href='cart.php'>Go to Cart</a>";
    }else{
            echo "Not added to cart. try again!!!";
            echo "<br><a href='database.php'>Home</a>";
    } 
?>