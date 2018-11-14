<?php

	$conn=mysqli_connect("localhost","root","","product");

	$name = $_POST["proname"];
	$ptype = $_POST["protype"];
	$btype = $_POST["brandType"];
	$image = $_FILES['image']['name'];
	$desc = $_POST['prodesc'];
	$cost = $_POST['cost'];

	move_uploaded_file($_FILES['image']['tmp_name'], "images/".$_FILES['image']['name']);


	$sql = "insert into product_details(pname,ptype,brandtype,upload_img,p_desc,cost) 
			values('$name','$ptype','$btype','$image','$desc','$cost')";
	$result = mysqli_query($conn,$sql);
	if($result){
?>
<br>
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
<br>
<?php	echo "successfully inserted record in DB";?>
<br>Want to enter another data..?<a href="admin.php">Click here</a>
<?php
	}else{
		echo "error".mysqli_error($conn);
	}
?>