<?php
    include ('header.php');
    $conn = mysqli_connect("localhost","root","","product");
    $id = $_GET['id'];
    $sql = "Update product_details set cart = 1 where id = $id";
    $result = mysqli_query($conn,$sql);
echo "</br>";
    if($result){
        echo "Added to cart successfully";
        echo "<br><a href='cart.php'>Go to Cart</a>";
    }else{
            echo "Not added to cart. try again!!!";
            echo "<br><a href='database.php'>Home</a>";
    } 
?>