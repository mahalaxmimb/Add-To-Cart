<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
<link rel="stylesheet" href="style.css" >
</head>
<body>
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
    $conn=mysqli_connect("localhost","root","","product");
    echo "</br>";
    echo "</br>";
/*    if (isset($_GET["page"])) {  
      $page1  = 0;  
    }  
    else {  
      $page1=($_GET["page"]*5)-5;  
    };  

    $page=$_GET["page"];

    if ($page=="" || $page=="1") { 
        $page1=0;
    } 
    else { 
        $page1=($page*5)-5; 
    };    
  */  
    $sql="select * from product_details";
    $result = $conn->query($sql);?>

    <div class="row">
    <?php while($r = mysqli_fetch_array($result)){ 
    ?>
      <div class="col-sm-6 col-md-4 col-lg-3 col-xs-6 " style="border:1px solid black; border-radius: 20px;margin-left: 30px; height: 260px;margin-top: 10px; width: 260px">
        <img src="images/<?php echo $r['upload_img']; ?>">
            <h3><?php echo $r['pname'] ?></h3>
            <p><?php echo $r['p_desc'] ?></p>
            <a href="mycart.php?id=<?php echo $r['id']; ?>">Add to Cart</a>
      </div>
<?php } ?>
</div>

<?php 
    $countres = "SELECT * FROM product_details";
    $row = mysqli_num_rows($result);
    $a=$row/5;
    $a= ceil($a);?>
    <div style="text-align:center;">
    <?php for ($i=1; $i<=$a; $i++) {  
        ?><a href="" style="text-decoration: none">
            <?php echo $i." "; ?></a>
        <?php
        }; 
?>
<script src="js/jquery-2.2.4.js"></script>
    <script src="js/bootstrap.min.js" ></script>
</body>
</html>