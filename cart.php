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
    $sql="select * from product_details where cart=1";
    $result = $conn->query($sql);
echo "</br>";
    while($r = mysqli_fetch_array($result)){ 
    ?>
      <div>
        <div style="margin-left:20px;border: 1px solid black; width: 1000px;border-radius: 10px;">
            <img src="images/<?php echo $r['upload_img']; ?>">
            <h3><?php echo $r['pname'] ?></h3>
            <p><?php echo $r['p_desc'] ?></p>
            <a style="float: right;" href="removecart.php?id=<?php echo $r['id']; ?>">Remove from Cart</a>
            <a style="float: right;" href="payment.php">Proceed to payment>></a>
        </div>
        <br>
      </div>
</div>
    <?php } 