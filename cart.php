<?php
  include ('header.php');
    $conn = mysqli_connect("localhost","root","","product");
    $sql="select * from product_details where cart=1";
    $result = $conn->query($sql);
echo "</br>";
?>
<div class="container">
<div class="row">
<?php
    while($r = mysqli_fetch_array($result)){ 
    ?>
      
        <div style="margin-left:20px;border: 1px solid black; width: 1000px;border-radius: 10px;margin-top: 25px;">
            <img style="margin-left: 10px" src="images/<?php echo $r['upload_img']; ?>">
            <h3><?php echo $r['pname'] ?></h3>
            <p><?php echo $r['p_desc'] ?></p>
            <a href="removecart.php?id=<?php echo $r['id']; ?>"><u>Remove from Cart</u></a>
            <a href="payment.php"><u>Proceed to payment>></u></a>
        </div>
        <br>
      
    <?php }?> 
    </div>
</div>